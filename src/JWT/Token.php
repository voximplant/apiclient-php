<?php

namespace Voximplant\JWT;

use Exception;
use Firebase\JWT\JWT;

class Token
{
    /** @var int Min 30 sec, max 3600 sec. */
    public $expTime = 60;

    /** @var int Account ID. */
    public $accountId;

    /**
     * @param string $tokenPath
     * @param int $accountId
     *
     * @return string
     *
     * @throws Exception
     */
    public function generateAuthorizationHeader(string $tokenPath, int $accountId = 0): string
    {
        if (!file_exists($tokenPath)) {
            throw new Exception('Token file not found!');
        }

        $content = file_get_contents($tokenPath);

        if (!($privateKey = json_decode($content))) {
            throw new Exception('JWT authorization error: Token not found!');
        }

        $this->accountId = $privateKey->account_id;

        if ($accountId !== 0) {
            $this->accountId = $accountId;
        }

        $payload = [
            'iat' => time(),
            'iss' => $this->accountId,
            'exp' => time() + $this->expTime,
        ];

        return 'Bearer '.JWT::encode($payload, $privateKey->private_key, 'RS256', $privateKey->key_id);
    }
}
