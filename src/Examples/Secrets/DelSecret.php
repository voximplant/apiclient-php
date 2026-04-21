<?php

/**
 * @method DelSecret Deletes an existing secret.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelSecretParams;

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
 * secret_id - IDs to delete. A list separated by semicolons (;). Use the 'all' value to delete all secrets
 * secret_name - Secret names to delete. List separated by semicolons (;)
 */
$params = new DelSecretParams();

$params->application_id = 1;
$params->secret_id = 10;

// Delete secret with ID 10.
$result = $voxApi->Secrets->DelSecret($params);

// Show result
var_dump($result);
