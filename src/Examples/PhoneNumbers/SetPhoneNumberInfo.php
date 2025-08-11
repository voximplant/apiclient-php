<?php

/**
 * @method SetPhoneNumberInfo Set the phone number information.
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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * phone_id - The phone ID list separated by semicolons (;). Use the 'all' value to select all phone ids
 * phone_number - The phone number list separated by semicolons (;) that can be used instead of phone_id
 * incoming_sms_callback_url - If set, the callback of an incoming SMS is sent to this url, otherwise, it is sent to the general account URL
 * auto_charge - Whether to enable the auto charging
 */
$params = new SetPhoneNumberInfoParams();

$params->phone_id = 1;
$params->auto_charge = true;

// Enable the auto charging.
$result = $voxApi->PhoneNumbers->SetPhoneNumberInfo($params);

// Show result
var_dump($result);
