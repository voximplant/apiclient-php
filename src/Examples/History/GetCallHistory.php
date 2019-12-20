<?php

/**
 * @method GetCallHistory Gets the call history.
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

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * timezone - The selected timezone or the 'auto' value (will be used the account location).
 * call_session_history_id - The call session history ID list. The sessions IDs can be accessed in JS scenario via the sessionID property of the AppEvents.Started event
 * application_id - The application ID.
 * application_name - The application name, can be used instead of application_id.
 * user_id - The user ID list. If it's specified, the output will contain the calls from the listed users only.
 * rule_name - The rule name to filter.
 * remote_number - The remote number list.
 * local_number - The local number list.
 * call_session_history_custom_data - The custom_data to filter sessions.
 * with_calls - Set true to get the bound calls.
 * with_records - Set true to get the bound records.
 * with_other_resources - Set true to get other resources usage (see [ResourceUsageType]).
 * child_account_id - The child account ID list or the 'all' value.
 * children_calls_only - Set true to get the children account calls only.
 * with_header - Set false to get a CSV file without the column names if the output=csv
 * desc_order - Set true to get records in the descent order.
 * with_total_count - Set false to omit the 'total_count' and increase performance.
 * count - The max returning record count.
 * offset - The first N records will be skipped in the output.
 * output - The output format. The following values available: json, csv.
 * is_async - Set true to get records in the asynchronous mode (for csv output only). If it's true, the request could be available via GetHistoryReports and DownloadHistoryReport methods.
 */
$params = new GetCallHistoryParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->count = 1;
$params->timezone = 'Etc/GMT';

// Get the first call session history record from the 2012-01-01 00:00:00 UTC to the 2014-01-01 00:00:00 UTC
$result = $voxApi->History->GetCallHistory($params);

// Show result
var_dump($result);
