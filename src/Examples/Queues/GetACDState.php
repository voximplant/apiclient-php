<?php

/**
 * @method GetACDState Gets the current ACD queue state.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetACDStateParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * acd_queue_id - The ACD queue ID list separated by semicolons (;). Use the 'all' value to select all ACD queues
 */
$params = new GetACDStateParams();

$params->acd_queue_id = 1;

// Get the state of the queue 1.
$result = $voxApi->Queues->GetACDState($params);

// Show result
var_dump($result);
