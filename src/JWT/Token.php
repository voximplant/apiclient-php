<?php

namespace Voximplant\JWT;

use Exception;
use Firebase\JWT\JWT;
use stdClass;

class Token
{
    /** @var int Min 30 sec, max 3600 sec. */
    public $expTime = 60;

    /** @var stdClass */
    private $privateKey;

    public function __construct()
    {
        if(!empty($_ENV['VOXIMPLANT_CREDENTIALS'])) {
            $this->privateKey = json_decode($_ENV['VOXIMPLANT_CREDENTIALS']);
        }
    }

    /**
     * @param string $tokenPath
     *
     * @return string
     *
     * @throws Exception
     */
    public function generateAuthorizationHeader($tokenPath): string
    {
        $privateKey = $this->getPrivateKey($tokenPath);

        $payload = [
            'iat' => time(),
            'iss' => $privateKey->account_id,
            'exp' => time() + $this->expTime,
        ];

        return 'Bearer '.JWT::encode($payload, $privateKey->private_key, 'RS256', $privateKey->key_id);
    }

    /**
     * @param $tokenPath
     * @return stdClass
     * @throws Exception
     */
    private function getPrivateKey($tokenPath)
    {
        if (empty($this->privateKey)) {
            if (!file_exists($tokenPath)) {
                throw new Exception('Token file not found!');
            }

            $content = file_get_contents($tokenPath);

            if (!($this->privateKey = json_decode($content))) {
                throw new Exception('JWT authorization error: Token not found!');
            }
        }

        return $this->privateKey;
    }
}
