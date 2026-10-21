<?php

/**
 * @method AttachPhoneNumber Attach the phone number to the account. There are two modes:<br><ol><li>Purchase from the catalog — specify <b>country_code</b>, <b>phone_category_name</b> and <b>phone_region_id</b> together; the platform picks the number. The [GetNewPhoneNumbers] method with the same three locators lists the numbers available for purchase.</li><li>Attach a specific phone number — pass <b>phone_number</b>; the three locators are not required. The [GetNewPhoneNumbers] method without the locators returns the numbers already available to the account, which are the ones this mode accepts.</li></ol>Note that phone numbers of some countries may require additional verification steps.<br><br>Please note that when you purchase a phone number, we reserve the subscription fee and taxes for the upcoming month. Read more in the <a href='/docs/gettingstarted/billing'>Billing</a> page.
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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * phone_count - Quantity of phone numbers you want to attach. If neither this parameter nor phone_number is specified, one phone number is attached from the catalog
 * phone_number - The phone numbers to attach, separated by semicolons (;). See the [GetNewPhoneNumbers] method. If neither this parameter nor phone_count is specified, one phone number is attached from the catalog
 * country_code - The country code. Required together with phone_category_name and phone_region_id to purchase from the catalog; not needed when attaching a specific phone number via phone_number
 * phone_category_name - The phone category name. See the [GetPhoneNumberCategories] method. Required together with country_code and phone_region_id to purchase from the catalog; not needed when attaching a specific phone number via phone_number
 * country_state - The country state. See the [GetPhoneNumberCategories] and [GetPhoneNumberCountryStates] methods
 * phone_region_id - The phone region ID. See the [GetPhoneNumberRegions] method. Required together with country_code and phone_category_name to purchase from the catalog; not needed when attaching a specific phone number via phone_number
 * regulation_address_id - The phone regulation address ID
 */
$params = new AttachPhoneNumberParams();

$params->country_code = 'US';
$params->phone_category_name = 'GEOGRAPHIC';
$params->country_state = 'CA';
$params->phone_region_id = 1100;
$params->phone_count = 1;

// Attach a US phone number to the account 1.
$result = $voxApi->PhoneNumbers->AttachPhoneNumber($params);

// Show result
var_dump($result);
