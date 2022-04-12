<?php

namespace Voximplant\Resources\Params;

class AddPushCredentialParams
{
    /** @var string The push provider name. The possible values are APPLE, APPLE_VOIP, GOOGLE, HUAWEI */
    public $push_provider_name;

    /** @var number The push provider id. Can be used instead of push_provider_name */
    public $push_provider_id;

    /** @var number The application id */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var string The bundle of Android/iOS/Huawei application */
    public $credential_bundle;

    /** @var string Public and private keys in PKCS12 format. Credentials for APPLE push */
    public $cert_content;

    /** @var string The parameter is required, when set 'cert_content' as POST body. Credentials for APPLE push */
    public $cert_file_name;

    /** @var string The secret password for private key. Credentials for APPLE push */
    public $cert_password;

    /** @var boolean Set true to use this certificate in apple's sandbox environment. Credentials for APPLE push */
    public $is_dev_mode;

    /** @var string The sender id, provided by Google. Credentials for GOOGLE push */
    public $sender_id;

    /** @var string The server key, provided by Google. Credentials for GOOGLE push */
    public $server_key;

    /** @var string The service account key file, provided by Google. Can be used instead of server_key. Credentials for GOOGLE push */
    public $service_account_file;

    /** @var string The client id, provided by Huawei. Credentials for HUAWEI push */
    public $huawei_client_id;

    /** @var string The client secret, provided by Huawei. Credentials for HUAWEI push */
    public $huawei_client_secret;

    /** @var string The application id, provided by Huawei. Credentials for HUAWEI push */
    public $huawei_application_id;
}
