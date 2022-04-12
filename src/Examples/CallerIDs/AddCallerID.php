<?php

/**
 * @method AddCallerID Adds a new caller ID. Caller ID is the phone that will be displayed to the called user. This number can be used for call back.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddCallerIDParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * callerid_number - The callerID number in E.164 format
 */
$params = new AddCallerIDParams();

$params->callerid_number = '74953331122';

$result = $voxApi->CallerIDs->AddCallerID($params);

// Show result
var_dump($result);
