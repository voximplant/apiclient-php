<?php

/**
 * @method VerifyOutboundTestPhoneNumber Starts a call to the added phone number and pronounces a verification code. You have only 5 verification attempts per day and 100 in total. 1 minute should pass between 2 attempts.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\VerifyOutboundTestPhoneNumberParams;

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
 */
$params = new VerifyOutboundTestPhoneNumberParams();


// Get the verification code.
$result = $voxApi->OutboundTestNumbers->VerifyOutboundTestPhoneNumber($params);

// Show result
var_dump($result);
