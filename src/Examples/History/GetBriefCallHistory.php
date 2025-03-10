<?php

/**
 * @method GetBriefCallHistory Gets the account's brief call history in the asynchronous mode. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetBriefCallHistoryParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * timezone - The selected timezone or the 'auto' value (the account location)
 * call_session_history_id - To get the call history for the specific sessions, pass the session IDs to this parameter separated by a semicolon (;). You can find the session ID in the AppEvents.Started event's sessionID property in a scenario, or retrieve it from the call_session_history_id value returned from the StartScenarios or StartConference methods
 * application_id - To receive the call history for a specific application, pass the application ID to this parameter
 * application_name - The application name, can be used instead of application_id
 * rule_name - To receive the call history for a specific routing rule, pass the rule name to this parameter. Applies only if you set application_id or application_name
 * remote_number - To receive a call history for a specific remote numbers, pass the number list separated by semicolons (;). A remote number is a number on the client side
 * local_number - To receive a call history for a specific local numbers, pass the number list separated by semicolons (;). A local number is a number on the platform side
 * call_session_history_custom_data - To filter the call history by the custom_data passed to the call sessions, pass the custom data to this parameter
 * desc_order - Whether to get records in the descent order
 * with_header - Whether to get a CSV file with the column names if the output=csv
 * output - The output format. The following values available: **csv**.
 */
$params = new GetBriefCallHistoryParams();

$params->from_date = '2020-02-25 00:00:00';
$params->to_date = '2020-02-26 00:00:00';
$params->timezone = 'Etc/GMT';
$params->output = 'cvs';

// Get the brief call session history from the 2020-02-25 00:00:00 UTC to the 2020-02-26 00:00:00 UTC.
$result = $voxApi->History->GetBriefCallHistory($params);

// Show result
var_dump($result);
