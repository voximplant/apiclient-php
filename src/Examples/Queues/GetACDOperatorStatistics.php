<?php

/**
 * @method GetACDOperatorStatistics Get statistics for calls distributed to users (referred as 'operators') via the 'ACD' module. This method can filter statistic based on operator ids, queue ids and date-time interval. It can also group results by day or hour.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetACDOperatorStatisticsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss'
 * user_id - The user ID list or the 'all' value. 
 */
$params = new GetACDOperatorStatisticsParams();

$params->from_date = '2017-01-01 00:00:00';
$params->user_id = 'all';

// Get statistics for all operators and all queues from the specified date
$result = $voxApi->Queues->GetACDOperatorStatistics($params);

// Show result
var_dump($result);
