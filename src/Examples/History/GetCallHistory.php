<?php

/**
 * @method GetCallHistory Gets the account's call history (including call duration, cost, logs and other call information). You can filter the call history by a certain date.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallHistoryParams;

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
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * timezone - The selected timezone or the 'auto' value (the account location)
 * call_session_history_id - To get the call history for the specific sessions, pass the session IDs to this parameter separated by a semicolon (;). You can find the session ID in the AppEvents.Started event's sessionID property in a scenario, or retrieve it from the call_session_history_id value returned from the StartScenarios or StartConference methods
 * application_id - To receive the call history for a specific application, pass the application ID to this parameter
 * application_name - The application name, can be used instead of application_id
 * user_id - To receive the call history for a specific users, pass the user ID list separated by semicolons (;). If it is specified, the output contains the calls from the listed users only
 * rule_name - To receive the call history for a specific routing rule, pass the rule name to this parameter. Applies only if you set application_id or application_name
 * remote_number - To receive a call history for a specific remote numbers, pass the number list separated by semicolons (;). A remote number is a number on the client side. Ignored if the `remote_number_list` parameter is not empty
 * remote_number_list - A JS array of strings of specific remote phone numbers to sort the call history. Has higher priority than the `remote_number` parameter. If the array is empty, the `remote_number` parameter is used instead
 * local_number - To receive a call history for a specific local numbers, pass the number list separated by semicolons (;). A local number is a number on the platform side
 * call_session_history_custom_data - To filter the call history by the custom_data passed to the call sessions, pass the custom data to this parameter
 * with_calls - Whether to receive a list of sessions with all calls within the sessions, including phone numbers, call cost and other information
 * with_records - Whether to get the calls' records
 * with_other_resources - Whether to get other resources usage (see [ResourceUsageType])
 * child_account_id - The child account ID list separated by semicolons (;)
 * children_calls_only - Whether to get the children account calls only
 * desc_order - Whether to get records in the descent order
 * with_total_count - Whether to include the 'total_count' and increase performance
 * count - The number of returning records. The maximum value is 1000
 * offset - The number of records to skip in the output. The maximum value of 10000
 */
$params = new GetCallHistoryParams();

$params->from_date = '2020-02-25 00:00:00';
$params->to_date = '2020-02-26 00:00:00';
$params->count = 1;
$params->timezone = 'Etc/GMT';
$params->with_calls = true;
$params->with_records = true;

// Get the first call session history record with calls and record URLs from the 2020-02-25 00:00:00 UTC to the 2020-02-26 00:00:00 UTC.
$result = $voxApi->History->GetCallHistory($params);

// Show result
var_dump($result);
