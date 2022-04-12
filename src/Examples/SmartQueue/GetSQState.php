<?php

/**
 * @method GetSQState Gets the current state of the specified smart queue.
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

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID to search by
 * application_name - The application name to search by. Can be used instead of the application_id parameter
 * sq_queue_id - The smart queue ID list. Use the 'all' value to select all smart queues
 * sq_queue_name - The smart queue name list. Can be used instead of sq_queue_id
 * timezone - The selected timezone or the 'auto' value (the account location)
 */
$params = new GetSQStateParams();

$params->application_id = 1;
$params->sq_queue_id = 1;

// Gets the current state of the smart queue with id = 1.
$result = $voxApi->SmartQueue->GetSQState($params);

// Show result
var_dump($result);
