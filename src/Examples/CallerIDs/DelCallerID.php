<?php

/**
 * @method DelCallerID Deletes the CallerID. Note: you cannot delete a CID permanently (the antispam defence).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelCallerIDParams;

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
 * callerid_id - ID of the callerID object
 * callerid_number - The callerID number that can be used instead of callerid_id
 */
$params = new DelCallerIDParams();

$params->callerid_id = 1;

// Delete the callerID 1.
$result = $voxApi->CallerIDs->DelCallerID($params);

// Show result
var_dump($result);
