<?php

namespace Voximplant\Resources\Params;

class SetPushCredentialParams
{
    /** @var number The push credentials id. */
    public $push_credential_id;

    /** @var string Public and private keys in PKCS12 format. */
    public $cert_content;

    /** @var string The secret password for private key. */
    public $cert_password;

    /** @var boolean Set true for use this certificate in apple's sandbox environment */
    public $is_dev_mode;

    /** @var string The sender id, provided by Google. */
    public $sender_id;

    /** @var string The server key, provided by Google. */
    public $server_key;
}
