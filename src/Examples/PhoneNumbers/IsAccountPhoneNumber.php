<?php

/**
 * @method IsAccountPhoneNumber Checks if the phone number belongs to the authorized account.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\IsAccountPhoneNumberParams;

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
 * phone_number - Phone number to check in the international format without `+`
 */
$params = new IsAccountPhoneNumberParams();

$params->phone_number = '79991234567';

// Check if the phone number belongs to the account.
$result = $voxApi->PhoneNumbers->IsAccountPhoneNumber($params);

// Show result
var_dump($result);
