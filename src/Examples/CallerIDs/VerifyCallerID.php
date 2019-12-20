<?php

/**
 * @method VerifyCallerID Gets a verification code by make call to the callerID number.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\VerifyCallerIDParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * callerid_id - The id of the callerID object.
 * callerid_number - The callerID number that can be used instead of callerid_id.
 */
$params = new VerifyCallerIDParams();

$params->callerid_id = 1;

// Verify the callerID 1.
$result = $voxApi->CallerIDs->VerifyCallerID($params);

// Show result
var_dump($result);
