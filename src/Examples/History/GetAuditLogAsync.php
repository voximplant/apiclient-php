<?php

/**
 * @method GetAuditLogAsync The [GetAuditLog] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAuditLogAsyncParams;

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
 * timezone - The selected timezone or the 'auto' value (the account location)
 * audit_log_id - The audit history ID list separated by semicolons (;)
 * filtered_admin_user_id - The admin user ID to filter
 * filtered_ip - The IP list separated by semicolons (;) to filter
 * filtered_cmd - The function list separated by semicolons (;) to filter
 * advanced_filters - A relation ID to filter (for example: a phone_number value, a user_id value, an application_id value)
 * desc_order - Whether to get records in the descent order
 * with_header - Whether to get a CSV file with the column names if the output=csv
 * output - The output format. The following values available: **csv**. The default value is **csv**
 */
$params = new GetAuditLogAsyncParams();

$params->from_date = '2018-02-01 00:00:00';
$params->to_date = '2018-03-01 00:00:00';
$params->filtered_cmd = array (
    0 => 'BindSkill',
    1 => 'AddSkill',
    2 => 'DelSkill',
);
$params->advanced_filters = '152';
$params->output = 'csv';

// Get the three log items from the 2018-02-01 00:00:00 to the 2018-03-01 00:00:00 and filter.
$result = $voxApi->History->GetAuditLogAsync($params);

// Show result
var_dump($result);
