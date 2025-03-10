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
 * to_date - Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss'
 * acd_queue_id - The ACD queue ID list separated by semicolons (;). Use the 'all' value to select all ACD queues
 * user_id - The user ID list separated by semicolons (;). Use the 'all' value to select all users
 * abbreviation - Whether key names in returned JSON are abbreviated to reduce response byte size. The abbreviations are: 'SA' for 'SpeedOfAnswer', 'HT' for 'HandlingTime', 'TT' for 'TalkTime', 'ACW' for 'AfterCallWork', 'TDT' for 'TotalDialingTime', 'THT' for 'TotalHandlingTime', 'TTT' for 'TotalTalkTime', 'TACW' for 'TotalAfterCallWork', 'AC' for 'AnsweredCalls', 'UAC' for 'UnansweredCalls'
 * report - List of item names abbreviations separated by semicolons (;). Returned JSON includes keys only for the selected items. Special 'all' value defines all possible items, see [ACDOperatorStatisticsType] for a complete list. See 'abbreviation' description for complete abbreviation list
 * aggregation - Specifies how records are grouped by date and time. If set to 'day', the criteria is a day number. If set to 'hour_of_day', the criteria is a 60-minute interval within a day. If set to 'hour', the criteria is both day number and 60-minute interval within that day. If set to 'none', records are not grouped by date and time
 * group - If set to 'user', first-level array in the resulting JSON groups records by the user ID, and second-level array groups them by date according to the 'aggregation' parameter. If set to 'aggregation', first-level array in the resulting JSON groups records according to the 'aggregation' parameter, and second-level array groups them by the user ID
 */
$params = new GetACDOperatorStatisticsParams();

$params->from_date = '2021-04-08 00:00:00';
$params->to_date = '2021-04-10 00:00:00';
$params->acd_queue_id = 54;
$params->user_id = array (
    0 => 1768,
    1 => 1769,
);
$params->report = array (
    0 => 'AC',
    1 => 'TT',
);
$params->aggregation = 'day';

// Get AC and TT statistics for two operators and the queue from the specified date.
$result = $voxApi->Queues->GetACDOperatorStatistics($params);

// Show result
var_dump($result);
