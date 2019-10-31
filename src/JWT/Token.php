<?php

namespace Voximplant\JWT;

use Firebase\JWT\JWT;

class Token
{
	/** Min 30 sec, max 3600 sec. */
	public $expTime = 60;


	/**
	 * @param $keyPath
	 *
	 * @return bool|string
	 */
	public function generateAuthorizationHeader($keyPath)
	{
		$token = false;
		$keyData = false;

		if (file_exists($keyPath)) {
		    $privateKey = json_decode(file_get_contents($keyPath));

		    if($privateKey) {
		        $payload = [
		            'iat' => time(), // start time
		            'iss' => $privateKey->account_id,
		            'exp' => time() + $this->expTime, // finish time
		        ];

		        $token = 'Bearer ' . JWT::encode($payload, $privateKey->private_key, 'RS256', $privateKey->key_id);
		    }
		}

		return $token;
	}
}
