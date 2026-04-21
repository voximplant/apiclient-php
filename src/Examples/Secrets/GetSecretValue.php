<?php

/**
 * @method GetSecretValue Gets the value of a specific secret.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSecretValueParams;

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
 * secret_id - Secret ID
 * secret_name - Secret name. Can be used instead of secret_id
 */
$params = new GetSecretValueParams();

$params->application_id = 1;
$params->secret_id = 10;

// Get the value of secret 10.
$result = $voxApi->Secrets->GetSecretValue($params);

// Show result
var_dump($result);
