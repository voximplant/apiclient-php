<?php

/**
 * @method AttachPhoneNumber Attach the phone number to the account. To attach the German, Italian phone numbers you should specify the phone_owner_* parameters.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AttachPhoneNumberParams;

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
 * phone_region_id - The phone region ID. See the GetPhoneNumberRegions method.
 * phone_number - The phone number that can be used instead of phone_count. See the [GetNewPhoneNumbers] method.
 */
$params = new AttachPhoneNumberParams();

$params->country_code = 'RU';
$params->phone_category_name = 'GEOGRAPHIC';
$params->phone_region_id = 4;
$params->phone_number = '74953332211';

// Attach the '74953332211' phone number to the account 1.
$result = $voxApi->PhoneNumbers->AttachPhoneNumber($params);

// Show result
var_dump($result);
