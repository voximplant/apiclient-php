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
        if (!$this->client->tokenPath) {
            throw new Exception('JWT authorization error: $ _ENV [\'VOXIMPLANT_CREDENTIALS_PATH\'] is empty');
        }

        if (!($token = $this->jwt->generateAuthorizationHeader($this->client->tokenPath))) {
            throw new Exception('JWT authorization error: Token not found!');
        }

        $headers = [
            'Authorization: '.$token,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $body = curl_exec($ch);
        curl_close($ch);

        return json_decode($body, true);
    }
}
