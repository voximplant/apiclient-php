<?php

/**
 * @method GetNewPhoneNumbers Gets the new phone numbers.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetNewPhoneNumbersParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * country_code - The country code
 * phone_category_name - The phone category name. See the [GetPhoneNumberCategories] function
 * country_state - The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions
 * phone_region_id - The phone region ID. See the [GetPhoneNumberRegions] method
 * count - The max returning record count
 * offset - The first N records will be skipped in the output
 */
$params = new GetNewPhoneNumbersParams();

$params->country_code = 'RU';
$params->phone_category_name = 'GEOGRAPHIC';
$params->phone_region_id = 1;
$params->count = 2;

// Get the two new fixed Russian phone numbers at max.
$result = $voxApi->PhoneNumbers->GetNewPhoneNumbers($params);

// Show result
var_dump($result);
