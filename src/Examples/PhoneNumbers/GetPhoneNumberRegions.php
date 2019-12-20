<?php

/**
 * @method GetPhoneNumberRegions Get the country regions of the phone numbers. The response will also contain the info about multiple numbers subscription for the child accounts.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPhoneNumberRegionsParams;

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
 * phone_category_name - The phone category name. See the GetPhoneNumberCategories method.
 * country_state - The country state code (example: AL, CA, ... ).
 * omit_empty - Set to 'false' to show all the regions (with and without phone numbers in stock).
 * phone_region_id - The phone region ID to filter.
 * phone_region_name - The phone region name to filter.
 * phone_region_code - The region phone prefix to filter.
 */
$params = new GetPhoneNumberRegionsParams();

$params->country_code = 'RU';
$params->phone_category_name = 'GEOGRAPHIC';

// Get the Russian regions of the phone numbers.
$result = $voxApi->PhoneNumbers->GetPhoneNumberRegions($params);

// Show result
var_dump($result);
