<?php

/**
 * @method GetSecrets Gets the list of an application's secrets.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSecretsParams;

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
 * secret_name_part - Filter by the secret name part
 * count - Maximum returning record number
 * offset - First N records to be skipped in the output
 */
$params = new GetSecretsParams();

$params->application_id = 1;
$params->count = 2;

// Get secrets of application 1.
$result = $voxApi->Secrets->GetSecrets($params);

// Show result
var_dump($result);
