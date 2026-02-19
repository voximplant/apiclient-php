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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * phone_id - Particular phone ID to filter
 * phone_number - Phone number list separated by semicolons (;) that can be used instead of phone_id
 * activation_status - Phone number activation statuses to filter, separated by semicolons (;).The possible values are: ACTIVE, ACTIVATING, DEACTIVATED, PROVISIONING, AWAITING_BUSINESS_PHONE_NUMBER_CONFIGURATION, LEGAL_OWNERSHIP_LIMIT_REACHED, GOSUSLUGI_DECLINED, SELF_BAN_ENABLED
 * application_id - Application ID
 * application_name - Application name that can be used instead of application_id
 * is_bound_to_application - Whether the phone number bound to an application
 * phone_template - Phone number start to filter
 * country_code - Country code list separated by semicolons (;)
 * phone_category_name - Phone category name. See the [GetPhoneNumberCategories] method
 * canceled - Whether the subscription is cancelled to filter
 * deactivated - Whether the subscription is frozen to filter
 * auto_charge - Whether the auto_charge flag is enabled
 * from_phone_next_renewal - UTC 'from' date filter in the following format: YYYY-MM-DD
 * to_phone_next_renewal - UTC 'to' date filter in the following format: YYYY-MM-DD
 * from_phone_purchase_date - UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_phone_purchase_date - UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss
 * child_account_id - Child account ID list separated by semicolons (;). Use the 'all' value to select all child accounts
 * children_phones_only - Whether to get the children phones only
 * verification_name - Required account verification name to filter
 * verification_status - Account verification status list separated by semicolons (;). The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED
 * from_unverified_hold_until - Unverified phone hold until the date (from ...) in the following format: YYYY-MM-DD
 * to_unverified_hold_until - Unverified phone hold until the date (... to) in the following format: YYYY-MM-DD
 * can_be_used - Whether a not verified account can use the phone
 * order_by - Following values are available: 'phone_number' (ascent order), 'phone_price' (ascent order), 'phone_country_code' (ascent order), 'deactivated' (deactivated first, active last), 'purchase_date' (descent order), 'phone_next_renewal' (ascent order), 'verification_status', 'unverified_hold_until' (ascent order), 'verification_name'
 * sandbox - Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers. The following values are possible: 'all', 'true', 'false'
 * count - Maximum returning record count
 * offset - First N records are skipped in the output
 * sms_supported - Whether the SMS support is enabled
 * phone_region_name - Region names list separated by semicolons (;)
 * rule_id - Rule ID list separated by semicolons (;)
 * rule_name - Rule names list separated by semicolons (;). Can be used only if __application_id__ or __application_name__ is specified
 * is_bound_to_rule - Whether the phone number is bound to some rule
 */
$params = new GetPhoneNumbersParams();

$params->count = 2;

// Get two attached phone numbers.
$result = $voxApi->PhoneNumbers->GetPhoneNumbers($params);

// Show result
var_dump($result);
