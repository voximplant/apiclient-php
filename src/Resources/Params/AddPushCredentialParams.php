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

    public function toArray()
    {
        return [
                'push_provider_name' => $this->push_provider_name,
                    'push_provider_id' => $this->push_provider_id,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'credential_bundle' => $this->credential_bundle,
                    'cert_content' => $this->cert_content ? new \CURLFile($this->cert_content, null, basename($this->cert_content)) : null,
                    'cert_file_name' => $this->cert_file_name,
                    'cert_password' => $this->cert_password,
                    'is_dev_mode' => $this->is_dev_mode,
                    'sender_id' => $this->sender_id,
                    'server_key' => $this->server_key,
                    'service_account_file' => $this->service_account_file ? new \CURLFile($this->service_account_file, null, basename($this->service_account_file)) : null,
                    'huawei_client_id' => $this->huawei_client_id,
                    'huawei_client_secret' => $this->huawei_client_secret,
                    'huawei_application_id' => $this->huawei_application_id,
            ];
    }
}
