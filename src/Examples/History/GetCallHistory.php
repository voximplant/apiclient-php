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
 * count - The max returning record count.
 * timezone - The selected timezone or the 'auto' value (will be used the account location).
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
