<?php

/**
 * @method ActivateCallerID Activates the CallerID by the verification code.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\ActivateCallerIDParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * callerid_id - ID of the callerID object
 * callerid_number - The callerID number that can be used instead of callerid_id
 * verification_code - The verification code, see the VerifyCallerID function
 */
$params = new ActivateCallerIDParams();

$params->callerid_id = 1;
$params->verification_code = '12345';

// Activate the callerID by the verification code.
$result = $voxApi->CallerIDs->ActivateCallerID($params);

// Show result
var_dump($result);
