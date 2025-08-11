<?php

/**
 * @method DeactivatePhoneNumber Deactivates the phone number.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DeactivatePhoneNumberParams;

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
 */
$params = new DeactivatePhoneNumberParams();

$params->phone_id = 1;

// Deactivate the phone 1.
$result = $voxApi->PhoneNumbers->DeactivatePhoneNumber($params);

// Show result
var_dump($result);
