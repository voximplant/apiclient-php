<?php

/**
 * @method SetSecretInfo Edits a secret's parameters.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetSecretInfoParams;

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
 * application_id - Application ID
 * application_name - Application name. Can be used instead of application_id
 * secret_id - Secret ID to edit
 * secret_name - Secret name. Can be used instead of secret_id
 * new_secret_name - New secret name. The name must start with a Latin letter and can contain up to 64 characters, including Latin letters, digits and underscores
 * secret_value - Secret value. Maximum length is 8192 characters
 * description - Secret description. When processing, the length is truncated to the first 200 characters
 */
$params = new SetSecretInfoParams();

$params->application_id = 1;
$params->secret_id = 10;
$params->secret_value = 'newsecret456';

// Update the value for secret 10.
$result = $voxApi->Secrets->SetSecretInfo($params);

// Show result
var_dump($result);
