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
 * acd_session_history_id - The ACD session history ID list
 * acd_request_id - The ACD request ID list
 * acd_queue_id - The ACD queue ID list to filter
 * user_id - The user ID list to filter
 * operator_hangup - Set true to get the calls terminated by the operator
 * unserviced - The unserviced calls by the operator
 * min_waiting_time - The min waiting time filter
 * rejected - The rejected calls by the 'max_queue_size', 'max_waiting_time' threshold
 * with_events - Set true to get the bound events
 * with_header - Set false to get a CSV file without the column names if the output=csv
 * desc_order - Set true to get records in the descent order
 * count - The max returning record count
 * offset - The first N records will be skipped in the output
 * output - The output format. The following values available: json, csv
 */
$params = new GetACDHistoryParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->with_events = true;
$params->count = 2;

// Get the two ACD session history records from the 2012-01-01 00:00:00 to the 2014-04-01 00:00:00.
$result = $voxApi->History->GetACDHistory($params);

// Show result
var_dump($result);
