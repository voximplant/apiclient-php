<?php

/**
 * @method GetCallerIDs Gets the account callerIDs.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallerIDsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * callerid_id - The id of the callerID object to filter
 * callerid_number - The phone number to filter
 * active - Whether the account is active to filter
 * order_by - The following values are available: 'caller_number' (ascent order), 'verified_until' (ascent order)
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetCallerIDsParams();

$params->callerid_number = '79997770044';

// Try to find the 79997770044 CID.
$result = $voxApi->CallerIDs->GetCallerIDs($params);

// Show result
var_dump($result);
