<?php

/**
 * @method DelApplication Deletes the account's application.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelApplicationParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID list separated by semicolons (;). Use the 'all' value to select all applications
 * application_name - The application name list separated by semicolons (;). Can be used instead of application_id
 */
$params = new DelApplicationParams();

$params->application_id = 'all';

// Delete the all applications.
$result = $voxApi->Applications->DelApplication($params);

// Show result
var_dump($result);
