<?php

/**
 * @method GetSmsHistory Get history of sent and/or received SMS.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSmsHistoryParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * destination_number - The destination phone number.
 * from_date - Date from which to perform search. Format is 'yyyy-MM-dd HH:mm:ss'.
 */
$params = new GetSmsHistoryParams();

$params->destination_number = '12345678222';
$params->row_limit = '2';
$params->from_date = '2019-03-01 00:00:00';

// Get messages that had been sent to number 12345678222 starting from March 1, 2019. Number of resulting rows is limited to 2.
$result = $voxApi->SMS->GetSmsHistory($params);

// Show result
var_dump($result);
