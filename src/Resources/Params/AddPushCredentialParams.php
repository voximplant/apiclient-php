<?php

namespace Voximplant\Resources\Params;

class AddPushCredentialParams
{
    /** @var string The push provider name. Available values: APPLE, APPLE_VOIP, GOOGLE. */
    public $push_provider_name;

    /** @var number The push provider id. */
    public $push_provider_id;

    /** @var string The bundle of Android/iOS application. */
    public $credential_bundle;

    /** @var string Public and private keys in PKCS12 format. */
    public $cert_content;

    /** @var string The parameter is required, when set 'cert_content' as POST body. */
    public $cert_file_name;

    /** @var string The secret password for private key. */
    public $cert_password;

    /** @var boolean Set true for use this certificate in apple's sandbox environment */
    public $is_dev_mode;

    /** @var string The sender id, provided by Google. */
    public $sender_id;

    /** @var string The server key, provided by Google. */
    public $server_key;
}
