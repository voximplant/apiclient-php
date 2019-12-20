<?php

/**
 * @method GetPhoneNumberCountryStates Gets the phone number country states.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPhoneNumberCountryStatesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * country_code - The country code.
 * phone_category_name - The phone category name. See the GetPhoneNumberCategories function.
 * country_state - The country state code (example: AL, CA, ... ).
 */
$params = new GetPhoneNumberCountryStatesParams();

$params->country_code = 'US';
$params->phone_category_name = 'GEOGRAPHIC';

// Get the USA states.
$result = $voxApi->PhoneNumbers->GetPhoneNumberCountryStates($params);

// Show result
var_dump($result);
