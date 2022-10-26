<?php

namespace Voximplant\Resources\Params;

class SetPushCredentialParams
{
    /** @var number The push credentials id */
    public $push_credential_id;

    /** @var string Public and private keys in PKCS12 format. Credentials for APPLE push */
    public $cert_content;

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
                'push_credential_id' => $this->push_credential_id,
                    'cert_content' => $this->cert_content ? new \CURLFile($this->cert_content, null, basename($this->cert_content)) : null,
                    'cert_password' => $this->cert_password,
                    'is_dev_mode' => $this->is_dev_mode !== null ? (filter_var($this->is_dev_mode, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'sender_id' => $this->sender_id,
                    'server_key' => $this->server_key,
                    'service_account_file' => $this->service_account_file ? new \CURLFile($this->service_account_file, null, basename($this->service_account_file)) : null,
                    'huawei_client_id' => $this->huawei_client_id,
                    'huawei_client_secret' => $this->huawei_client_secret,
                    'huawei_application_id' => $this->huawei_application_id,
            ];
    }
}
