<?php

/**
 * @method GetActualPhoneNumberRegion Get actual info on the country region of the phone numbers. The response also contains the info about multiple numbers subscription for the child accounts.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetActualPhoneNumberRegionParams;

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
 * country_code - The country code
 * phone_category_name - The phone category name. See the [GetPhoneNumberCategories] method
 * country_state - The country state code (example: AL, CA, ... )
 * phone_region_id - The phone region ID to filter
 * locale - The 2-letter locale code. Supported values are EN, RU
 */
$params = new GetActualPhoneNumberRegionParams();

$params->country_code = 'DE';
$params->phone_category_name = 'GEOGRAPHIC';
$params->phone_region_id = 1;

// Get the Germany region of the phone numbers.
$result = $voxApi->PhoneNumbers->GetActualPhoneNumberRegion($params);

// Show result
var_dump($result);
