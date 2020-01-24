<?php

/**
 * @method GetACDOperatorStatusStatistics Get statistics for the specified operators and ACD statuses. This method can filter statistics by operator ids and statuses. It can also group results by day/hour or users.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetACDOperatorStatusStatisticsParams;

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
 * to_date - Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss'.
 * acd_status - The ACD status list. The following values are possible: OFFLINE, ONLINE, READY, BANNED, IN_SERVICE, AFTER_SERVICE, TIMEOUT, DND.
 * user_id - The user ID list or the 'all' value. 
 * aggregation - Specifies how records are grouped by date and time. If set to 'day', the criteria is a day number. If set to 'hour_of_day', the criteria is a 60-minute interval within a day. If set to 'hour', the criteria is both day number and 60-minute interval within that day. If set to 'none', records are not grouped by date and time.
 * group - If set to 'user', first-level array in the resulting JSON will group records by the user ID, and second-level array will group them by date according to the 'aggregation' parameter. If set to 'aggregation', first-level array in the resulting JSON will group records according to the 'aggregation' parameter, and second-level array will group them by the user ID.
 */
$params = new GetACDOperatorStatusStatisticsParams();

$params->from_date = '2019-05-20 11:00:00';
$params->to_date = '2019-05-20 13:00:00';
$params->acd_status = array (
    0 => 'READY',
    1 => 'ONLINE',
);
$params->user_id = 'all';
$params->aggregation = 'hour';
$params->group = 'user';

// Get statistics for the 'READY' and 'ONLINE' statuses of all operators; grouped by operators.
$result = $voxApi->Queues->GetACDOperatorStatusStatistics($params);

// Show result
var_dump($result);
