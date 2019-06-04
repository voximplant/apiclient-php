<?php

/**
 * @method SetPhoneNumberInfo Configure the phone number.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetPhoneNumberInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * phone_id - The phone ID list or the 'all' value.
 * auto_charge - Set true to enable the auto charging.
 */
$params = new SetPhoneNumberInfoParams();

$params->phone_id = 1;
$params->auto_charge = true;

// Enable the auto charging.
$result = $voxApi->PhoneNumbers->SetPhoneNumberInfo($params);

// Show result
var_dump($result);
