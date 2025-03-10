<?php

namespace Voximplant\Http;

use Exception;
use Voximplant\JWT\Token;
use Voximplant\VoximplantApi;

class Curl
{
    /** @var Token */
    private $jwt;

    /** @var VoximplantApi */
    private $client;

    /**
     * @param VoximplantApi $client
     */
    public function __construct($client)
    {
        $this->client = $client;
        $this->jwt = new Token();
    }

    /**
     * @param string $url
     * @param array  $data
     *
     * @throws Exception
     *
     * @return array
     */
    public function send(string $url, array $data): array
    {
        // Prepare the multipart boundary
        $boundary = uniqid();
        $delimiter = '-------------' . $boundary;

        // Separate files and regular fields
        $files = [];
        $regularFields = [];

        foreach ($data as $name => $value) {
            if (is_string($value) && file_exists($value)) {
                $files[$name] = fopen($value, 'r');
            } else {
                $regularFields[$name] = $value;
            }
        }

        // Build the multipart data
        $multipart = '';
        foreach ($regularFields as $name => $value) {
            $multipart .= "--{$delimiter}\r\n";
            $multipart .= "Content-Disposition: form-data; name=\"{$name}\"\r\n\r\n";
            $multipart .= $value . "\r\n";
        }

        // Get JWT token
        if (!($token = $this->jwt->generateAuthorizationHeader($this->client->tokenPath))) {
            throw new Exception('JWT authorization error: Token not found!');
        }

        if (!empty($files)) {
            foreach ($files as $name => $value) {
                $multipart .= "--{$delimiter}\r\n";
                $multipart .= "Content-Disposition: form-data; name=\"{$name}\"; filename=\"stream\"\r\n";
                $multipart .= "Content-Type: application/octet-stream\r\n\r\n";
            }
        }

        // Set headers
        $headers = [
            "Content-Type: multipart/form-data; boundary={$delimiter}",
            'Authorization: ' . $token,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $suffix = "--" . $delimiter . "--\r\n";

        if (!empty($files)) {
            // Initialize state variables
            $state = [
                'offset' => 0,
                'multipart' => $multipart,
                'suffix' => $suffix,
                'files' => array_values($files), // Convert to indexed array
                'currentFileIndex' => 0,
                'currentFilePosition' => 0,
                'inFileContent' => false,
                'endingSent' => false
            ];

            $readFunction = function($ch, $fd, $length) use (&$state) {
                // Send initial multipart data
                if ($state['offset'] < strlen($state['multipart'])) {
                    $data = substr($state['multipart'], $state['offset'], $length);
                    $state['offset'] += strlen($data);
                    return $data;
                }

                // Handle file content
                if (!$state['endingSent'] && isset($state['files'][$state['currentFileIndex']])) {
                    $currentFile = $state['files'][$state['currentFileIndex']];

                    if (!$state['inFileContent']) {
                        $state['inFileContent'] = true;
                        // Ensure we're at the correct position
                        if (ftell($currentFile) !== $state['currentFilePosition']) {
                            fseek($currentFile, $state['currentFilePosition']);
                        }
                    }

                    $data = fread($currentFile, $length);

                    if ($data === false || strlen($data) === 0) {
                        // Move to next file if available
                        $state['currentFileIndex']++;
                        $state['inFileContent'] = false;
                        $state['currentFilePosition'] = 0;

                        if (!isset($state['files'][$state['currentFileIndex']])) {
                            $state['endingSent'] = true;
                            return $state['suffix'];
                        }

                        return "\r\n";
                    }

                    $state['currentFilePosition'] += strlen($data);
                    return $data;
                }

                return '';
            };

            curl_setopt($ch, CURLOPT_READFUNCTION, $readFunction);
            curl_setopt($ch, CURLOPT_UPLOAD, true);
        } else {
            // If we only have regular fields, use simple CURLOPT_POSTFIELDS
            $multipart .= "--{$delimiter}--\r\n";
            curl_setopt($ch, CURLOPT_POSTFIELDS, $multipart);
        }

        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $body = curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

        if ($body === false) {
            throw new ClientException(curl_error($ch), curl_errno($ch));
        }
        //Clean up file handles
        foreach ($files as $handle) {
            fclose($handle);
        }

        curl_close($ch);

        if ($code >= 400 && $code < 500) {
            throw new ClientException($body, $code);
        }

        if ($type === "application/octet-stream") {
            $response = ['file_content' => $body];
        } else {
            $response = json_decode($body, true);
            if (json_last_error()) {
                $err = [
                    'msg' => 'Failed to parse server response. Err: '.json_last_error_msg(),
                    'code' => json_last_error(),
                ];
                $response = [
                    'error' => $err,
                    'errors' => [$err],
                ];
            }
        }

        return $response;
    }
}
