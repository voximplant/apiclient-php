<?php

/**
 * @method GetSQState Gets the current state of the specified SmartQueue.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSQStateParams;

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
 * application_id - The application ID to search by
 * application_name - The application name to search by. Can be used instead of the application_id parameter
 * sq_queue_id - The SmartQueue ID list separated by semicolons (;). Use the 'all' value to select all SmartQueues
 * sq_queue_name - The SmartQueue name list separated by semicolons (;). Can be used instead of sq_queue_id
 * timezone - The selected timezone or the 'auto' value (the account location)
 */
$params = new GetSQStateParams();

$params->application_id = 1;
$params->sq_queue_id = 1;

// Get the current state of the SmartQueue with id = 1.
$result = $voxApi->SmartQueue->GetSQState($params);

// Show result
var_dump($result);
