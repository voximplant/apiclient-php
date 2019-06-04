<?php

/**
 * @method GetACDHistory Gets the ACD history.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetACDHistoryParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * with_events - Set true to get the bound events.
 * count - The max returning record count.
 */
$params = new GetACDHistoryParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->with_events = true;
$params->count = 2;

// Get the two ACD session history records from the 2012-01-01 00:00:00 to the 2014-04-01 00:00:00
$result = $voxApi->History->GetACDHistory($params);

// Show result
var_dump($result);
