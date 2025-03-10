<?php

/**
 * @method GetHistoryReports Gets the list of history reports and their statuses. The method returns info about the reports made via [GetCallHistoryAsync], [GetTransactionHistoryAsync], [GetAuditLogAsync] and [GetBriefCallHistory] asynchronous methods. Note that the **file_size** field in response is valid only for the video calls.
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
 * history_report_id - The history report ID to filter
 * history_type - The history report type list separated by semicolons (;). Use the 'all' value to select all history report types. The following values are possible: calls, calls_brief, transactions, audit, call_list, transactions_on_hold
 * created_from - The UTC creation from date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * created_to - The UTC creation to date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * is_completed - Whether the report is completed
 * desc_order - Whether to get records in the descent order
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 * application_id - The application ID to filter. Can be a list separated by semicolons (;). Use the 'all' value to select all applications
 */
$params = new GetHistoryReportsParams();

$params->history_type = 'all';

// Get all the reports.
$result = $voxApi->History->GetHistoryReports($params);

// Show result
var_dump($result);
