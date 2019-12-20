<?php

/**
 * @method AddApplication Adds a new account's application.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddApplicationParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_name - The short application name in format \[a-z\]\[a-z0-9-\]{1,64}
 * secure_record_storage - Enable secure storage for all logs and records of the application
 */
$params = new AddApplicationParams();

$params->application_name = 'myapp1';

// Add a new application.
$result = $voxApi->Applications->AddApplication($params);

// Show result
var_dump($result);
