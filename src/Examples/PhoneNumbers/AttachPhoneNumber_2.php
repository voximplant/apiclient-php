<?php

/**
 * @method AttachPhoneNumber Attach the phone number to the account. Note that phone numbers of some countries may require additional verification steps.
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
 * phone_count - The phone count to attach.
 * phone_number - The phone number that can be used instead of phone_count. See the [GetNewPhoneNumbers] method.
 * country_code - The country code.
 * phone_category_name - The phone category name. See the [GetPhoneNumberCategories] method.
 * country_state - The country state. See the [GetPhoneNumberCategories] and [GetPhoneNumberCountryStates] methods.
 * phone_region_id - The phone region ID. See the [GetPhoneNumberRegions] method.
 * regulation_address_id - The phone regulation address ID.
 * force_verification - The force verification flag.
 */
$params = new AttachPhoneNumberParams();

$params->country_code = 'RU';
$params->phone_category_name = 'GEOGRAPHIC';
$params->phone_region_id = 4;
$params->phone_number = array (
    0 => '74953332211',
    1 => '74953332211',
);

// Attach the '74953332211' and '74953332299' phone numbers to the account 1.
$result = $voxApi->PhoneNumbers->AttachPhoneNumber($params);

// Show result
var_dump($result);
