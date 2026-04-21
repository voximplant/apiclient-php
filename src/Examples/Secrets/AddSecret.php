<?php

/**
 * @method AddSecret Adds a new secret.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddSecretParams;

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
 * application_id - Application ID to add the secret to
 * application_name - Application name. Can be used instead of application_id
 * secret_name - Secret name. The name must start with a Latin letter and can contain up to 64 characters, including Latin letters, digits and underscores
 * secret_value - Secret value. Maximum length is 8192 characters
 * description - Optional. Secret description. When processing, the length is truncated to the first 200 characters
 */
$params = new AddSecretParams();

$params->application_id = 1;
$params->secret_name = 'some_secret_name';
$params->secret_value = 'secret123';

// Add a new secret to application 1
$result = $voxApi->Secrets->AddSecret($params);

// Show result
var_dump($result);
