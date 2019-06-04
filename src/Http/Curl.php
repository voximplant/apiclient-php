<?php

namespace Voximplant\Http;

use Exception;
use Voximplant\JWT\Token;

class Curl
{
	/** JWT token object */
	private $jwt;

	/** Client data */
	private $client;


	public function __construct($client)
	{
		$this->client = $client;
		$this->jwt = new Token();
	}


	public function send($url, $data)
	{
		$ch = curl_init();

		$headers = [];

		if(!$this->client->tokenPath) {
		    throw new Exception('JWT authorization error: $ _ENV [\'VOXIMPLANT_CREDENTIALS_PATH\'] is empty');
		}

		$token = $this->jwt->generateAuthorizationHeader($this->client->tokenPath);
		if (!$token) {
		    throw new Exception('JWT authorization error: Token not found!');
		}

		$headers[] = 'Authorization: ' . $token;

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$body = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		return json_decode($body, true);
	}
}
