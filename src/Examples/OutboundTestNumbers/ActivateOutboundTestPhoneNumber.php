<?php

/**
 * @method ActivateOutboundTestPhoneNumber Activates the phone number by the verification code.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\ActivateOutboundTestPhoneNumberParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * verification_code - The verification code, see the [VerifyOutboundTestPhoneNumber] function
 */
$params = new ActivateOutboundTestPhoneNumberParams();

$params->verification_code = '12345';

// Activate the personal phone number by the verification code.
$result = $voxApi->OutboundTestNumbers->ActivateOutboundTestPhoneNumber($params);

// Show result
var_dump($result);
