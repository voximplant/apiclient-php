<?php

/**
 * @method GetPhoneNumbers Gets the account phone numbers.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetPhoneNumbersParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * phone_id - The particular phone ID to filter
 * phone_number - The phone number list separated by semicolons (;) that can be used instead of phone_id
 * application_id - The application ID
 * application_name - The application name that can be used instead of application_id
 * is_bound_to_application - Whether the phone number bound to an application
 * phone_template - The phone number start to filter
 * country_code - The country code list separated by semicolons (;)
 * phone_category_name - The phone category name. See the [GetPhoneNumberCategories] method
 * canceled - Whether the subscription is cancelled to filter
 * deactivated - Whether the subscription is frozen to filter
 * auto_charge - Whether the auto_charge flag is enabled
 * from_phone_next_renewal - The UTC 'from' date filter in format: YYYY-MM-DD
 * to_phone_next_renewal - The UTC 'to' date filter in format: YYYY-MM-DD
 * from_phone_purchase_date - The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_phone_purchase_date - The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * child_account_id - The child account ID list separated by semicolons (;). Use the 'all' value to select all child accounts
 * children_phones_only - Whether to get the children phones only
 * verification_name - The required account verification name to filter
 * verification_status - The account verification status list separated by semicolons (;). The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED
 * from_unverified_hold_until - Unverified phone hold until the date (from ...) in format: YYYY-MM-DD
 * to_unverified_hold_until - Unverified phone hold until the date (... to) in format: YYYY-MM-DD
 * can_be_used - Whether a not verified account can use the phone
 * order_by - The following values are available: 'phone_number' (ascent order), 'phone_price' (ascent order), 'phone_country_code' (ascent order), 'deactivated' (deactivated first, active last), 'purchase_date' (descent order), 'phone_next_renewal' (ascent order), 'verification_status', 'unverified_hold_until' (ascent order), 'verification_name'
 * sandbox - Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers. The following values are possible: 'all', 'true', 'false'
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 * sms_supported - Whether the SMS support is enabled
 * phone_region_name - The region names list separated by semicolons (;)
 * rule_id - The rule ID list separated by semicolons (;)
 * rule_name - The rule names list separated by semicolons (;). Can be used only if __application_id__ or __application_name__ is specified
 * is_bound_to_rule - Whether the phone number is bound to some rule
 */
$params = new GetPhoneNumbersParams();

$params->count = 2;

// Get two attached phone numbers.
$result = $voxApi->PhoneNumbers->GetPhoneNumbers($params);

// Show result
var_dump($result);
