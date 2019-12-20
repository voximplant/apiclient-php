<?php

/**
 * @method AddPushCredential Add push credentials
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
 * push_provider_name - The push provider name. Available values: APPLE, APPLE_VOIP, GOOGLE.
 * push_provider_id - The push provider id.
 * credential_bundle - The bundle of Android/iOS application.
 * cert_content - Public and private keys in PKCS12 format.
 * cert_file_name - The parameter is required, when set 'cert_content' as POST body.
 * cert_password - The secret password for private key.
 * is_dev_mode - Set true for use this certificate in apple's sandbox environment
 * sender_id - The sender id, provided by Google.
 * server_key - The server key, provided by Google.
 */
$params = new AddPushCredentialParams();

$params->push_provider_name = 'GOOGLE';
$params->sender_id = '704777431520';
$params->server_key = 'AAAAjM-LQsc:APA91bGyCb5WhcGtaM-RaOI1GqWps1Uh9K-YoY75HIBy-En-4piH4c6_50gIEbSaCfuDrsLNfyZCvteiu6EjxA_rEBOvlc4xZ30uiGgbuM_jdT6y6Ku55OwnCyIxRNznvmx1jkkLexSU';

// Add new Google credentials.
$result = $voxApi->PushCredentials->AddPushCredential($params);

// Show result
var_dump($result);
