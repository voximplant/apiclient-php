<?php

/**
 * @method SetPushCredential Modifies push credentials.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetPushCredentialParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * push_credential_id - The push credentials id
 * cert_content - Public and private keys in PKCS12 format. Credentials for APPLE push
 * cert_password - The secret password for private key. Credentials for APPLE push
 * is_dev_mode - Whether to use this certificate in apple's sandbox environment. Credentials for APPLE push
 * sender_id - The sender id, provided by Google. Credentials for GOOGLE push
 * server_key - The server key, provided by Google. Credentials for GOOGLE push
 * service_account_file - The service account key file, provided by Google. Can be used instead of server_key. Credentials for GOOGLE push
 * huawei_client_id - The client id, provided by Huawei. Credentials for HUAWEI push
 * huawei_client_secret - The client secret, provided by Huawei. Credentials for HUAWEI push
 * huawei_application_id - The application id, provided by Huawei. Credentials for HUAWEI push
 */
$params = new SetPushCredentialParams();

$params->push_credential_id = 1;
$params->cert_password = '1234567';

// Modify credentials.
$result = $voxApi->PushCredentials->SetPushCredential($params);

// Show result
var_dump($result);
