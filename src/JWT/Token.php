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
		$keyData = false;

		if (file_exists($keyPath)) {
		    $privateKey = json_decode(file_get_contents($keyPath));

		    if(!empty($privateKey->result->private_key)) {
		        $keyData = $privateKey->result;
		    } elseif (!empty($privateKey->private_key)) {
		        $keyData = $privateKey;
		    }

		    if($keyData) {
		        $payload = [
		            'iat' => time(), // start time
		            'iss' => $keyData->account_id,
		            'exp' => time() + $this->expTime, // finish time
		        ];

		        $token = 'Bearer ' . JWT::encode($payload, $keyData->private_key, 'RS256', $keyData->key_id);
		    }
		}

		return $token;
	}
}
