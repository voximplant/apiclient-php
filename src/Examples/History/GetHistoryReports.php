<?php

/**
 * @method GetHistoryReports Gets the list of history reports and their statuses. The method returns info about reports made via [GetCallHistory] with the specified __output=csv__ and **is_async=true** parameters.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetHistoryReportsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * history_type - The history report type list or the 'all' value. The following values are possible: calls, transactions, audit, call_list.
 */
$params = new GetHistoryReportsParams();

$params->history_type = 'all';

// Get all the reports.
$result = $voxApi->History->GetHistoryReports($params);

// Show result
var_dump($result);
