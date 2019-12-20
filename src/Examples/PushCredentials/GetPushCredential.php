<?php

/**
 * @method GetPushCredential Get push credentials
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPushCredentialParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * push_credential_id - The push credentials id.
 * push_provider_name - The push provider name. Available values: APPLE, APPLE_VOIP, GOOGLE.
 * push_provider_id - The push provider id.
 * application_name - The name of bound application.
 * application_id - The id of bound application.
 * with_cert - Set true to get the user's certificate.
 * with_secret_info - Set true to get the certificate's password.
 */
$params = new GetPushCredentialParams();

$params->push_credential_id = 1;

// Get push credentials.
$result = $voxApi->PushCredentials->GetPushCredential($params);

// Show result
var_dump($result);
