<?php

namespace Voximplant\JWT;

use Firebase\JWT\JWT;

class Token
{
	/** Max 30 seconds */
	public $expTime = 25;


	public function generateAuthorizationHeader($keyPath)
	{
		$token = false;

		if (file_exists($keyPath)) {
		    $privateKey = json_decode(file_get_contents($keyPath));
		    if(!empty($privateKey->result->private_key)) {
		        $payload = [
		        'iat' => time(), // start time
		        'iss' => $privateKey->result->account_id,
		        'exp' => time() + $this->expTime, // finish time
		        ];

		        $token = 'Bearer ' . JWT::encode($payload, $privateKey->result->private_key, 'RS256', $privateKey->result->key_id);
		    }
		}

		return $token;
	}
}
