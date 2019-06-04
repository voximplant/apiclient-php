<?php

/**
 * @method GetAuditLog Gets the history of account changes.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetAuditLogParams;

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
 * filtered_cmd - The function list to filter.
 * advanced_filters - A relation ID to filter (for example: a phone_number value, a user_id value, an application_id value).
 * count - The max returning record count.
 */
$params = new GetAuditLogParams();

$params->from_date = '2018-02-01 00:00:00';
$params->to_date = '2018-03-01 00:00:00';
$params->filtered_cmd = array (
    0 => 'BindSkill',
    1 => 'AddSkill',
    2 => 'DelSkill',
);
$params->advanced_filters = '152';
$params->count = 3;

// Get the three log items from the 2018-02-01 00:00:00 to the 2018-03-01 00:00:00 and filter.
$result = $voxApi->History->GetAuditLog($params);

// Show result
var_dump($result);
