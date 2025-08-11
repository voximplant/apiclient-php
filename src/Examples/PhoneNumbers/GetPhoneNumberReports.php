<?php

/**
 * @method GetPhoneNumberReports Receives information about the created phone numbers report or list of reports.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPhoneNumberReportsParams;

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
 * report_id - The phone number report ID to filter
 * report_type - The phone number report type list separated by semicolons (;). Use the 'all' value to select all history report types. The following values are possible: calls, calls_brief, transactions, audit, call_list, transactions_on_hold
 * created_from - The UTC creation from date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * created_to - The UTC creation to date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * is_completed - Whether the report is completed
 * desc_order - Whether to get records in the descent order
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetPhoneNumberReportsParams();

$params->history_type = 'all';

// Get all the reports.
$result = $voxApi->PhoneNumbers->GetPhoneNumberReports($params);

// Show result
var_dump($result);
