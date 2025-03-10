<?php

/**
 * @method DownloadHistoryReport Downloads the required history report.<br><br>Please note, that the history report can return in a compressed state (*.gzip). In order for CURL to process a compressed file correctly, add the **--compressed** key.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DownloadHistoryReportParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * history_report_id - The history report ID
 */
$params = new DownloadHistoryReportParams();

$params->history_report_id = 1;

// Download the completed history report with id = 1.
$result = $voxApi->History->DownloadHistoryReport($params);

// Show result
var_dump($result);
