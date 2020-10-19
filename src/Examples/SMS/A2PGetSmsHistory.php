<?php

/**
 * @method A2PGetSmsHistory Gets the history of sent/or received A2P SMS.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\A2PGetSmsHistoryParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * source_number - The source phone number.
 * destination_number - The destination phone number.
 * count - Maximum number of resulting rows fetched. Must be not more than 1000. If left blank, then the default value of 1000 will be used.
 * offset - The first N records will be skipped in the output.
 * from_date - Date from which the search is to start. Format is 'yyyy-MM-dd HH:mm:ss'.
 * to_date - Date from which the search is to end. Format is 'yyyy-MM-dd HH:mm:ss'.
 * output - The output format. The possible values are: json, csv.
 * delivery_status - The delivery status ID: QUEUED - 1, DISPATCHED - 2, ABORTED - 3, REJECTED - 4, DELIVERED - 5, FAILED - 6, EXPIRED - 7, UNKNOWN - 8.
 */
$params = new A2PGetSmsHistoryParams();

$params->destination_number = '12345678222';
$params->row_limit = '2';
$params->from_date = '2019-03-01 00:00:00';

// Get messages that had been sent to number 12345678222 starting from March 1, 2019. Number of resulting rows is limited to 2.
$result = $voxApi->SMS->A2PGetSmsHistory($params);

// Show result
var_dump($result);
