<?php

/**
 * @method AddPushCredential Adds push credentials.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddPushCredentialParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * push_provider_name - The push provider name. The possible values are APPLE, APPLE_VOIP, GOOGLE, HUAWEI
 * push_provider_id - The push provider id. Can be used instead of push_provider_name
 * application_id - The application id
 * application_name - The application name that can be used instead of application_id
 * credential_bundle - The bundle of Android/iOS/Huawei application
 * cert_content - Public and private keys in PKCS12 format. Credentials for APPLE push
 * cert_file_name - The parameter is required, when set 'cert_content' as POST body. Credentials for APPLE push
 * cert_password - The secret password for private key. Credentials for APPLE push
 * is_dev_mode - Set true to use this certificate in apple's sandbox environment. Credentials for APPLE push
 * sender_id - The sender id, provided by Google. Credentials for GOOGLE push
 * server_key - The server key, provided by Google. Credentials for GOOGLE push
 * service_account_file - The service account key file, provided by Google. Can be used instead of server_key. Credentials for GOOGLE push
 * huawei_client_id - The client id, provided by Huawei. Credentials for HUAWEI push
 * huawei_client_secret - The client secret, provided by Huawei. Credentials for HUAWEI push
 * huawei_application_id - The application id, provided by Huawei. Credentials for HUAWEI push
 */
$params = new AddPushCredentialParams();

$params->push_provider_name = 'APPLE';
$params->cert_password = '12345678';
$params->cert_file_name = 'apple_certificate_name';
$params->is_dev_mode = false;

// Add new Apple credentials.
$result = $voxApi->PushCredentials->AddPushCredential($params);

// Show result
var_dump($result);
