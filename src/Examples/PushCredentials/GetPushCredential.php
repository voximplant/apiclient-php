<?php

/**
 * @method GetPushCredential Gets push credentials.
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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * push_credential_id - The push credentials id
 * push_provider_name - The push provider name. The possible values are APPLE, APPLE_VOIP, GOOGLE, HUAWEI
 * push_provider_id - The push provider id. Can be used instead of push_provider_name. The possible values are: 1 — APPLE, 2 — GOOGLE, 3 — APPLE_VOIP, 5 — HUAWEI.
 * application_name - Name of the bound application
 * application_id - ID of the bound application
 * with_cert - Whether to get the user's certificate
 * with_secret_info - Whether to get the certificate's password
 */
$params = new GetPushCredentialParams();

$params->push_credential_id = 1;

// Get push credentials.
$result = $voxApi->PushCredentials->GetPushCredential($params);

// Show result
var_dump($result);
