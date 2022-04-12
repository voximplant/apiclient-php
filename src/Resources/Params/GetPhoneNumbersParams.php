<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumbersParams
{
    /** @var number The particular phone ID to filter */
    public $phone_id;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var boolean Is a phone bound to an application */
    public $is_bound_to_application;

    /** @var string The phone number start to filter */
    public $phone_template;

    /** @var stringlist The country code list separated by the ';' symbol */
    public $country_code;

    /** @var string The phone category name. See the [GetPhoneNumberCategories] method */
    public $phone_category_name;

    /** @var boolean The flag of the canceled (deleted) subscription to filter */
    public $canceled;

    /** @var boolean The flag of the deactivated (frozen) subscription to filter */
    public $deactivated;

    /** @var boolean The auto_charge flag to filter */
    public $auto_charge;

    /** @var date The UTC 'from' date filter in format: YYYY-MM-DD */
    public $from_phone_next_renewal;

    /** @var date The UTC 'to' date filter in format: YYYY-MM-DD */
    public $to_phone_next_renewal;

    /** @var timestamp The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_phone_purchase_date;

    /** @var timestamp The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_phone_purchase_date;

    /** @var intlist The child account ID list separated by the ';' symbol. Use the 'all' value to select all child accounts */
    public $child_account_id;

    /** @var boolean Set true to get the children phones only */
    public $children_phones_only;

    /** @var string The required account verification name to filter */
    public $verification_name;

    /** @var stringlist The account verification status list separated by the ';' symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED */
    public $verification_status;

    /** @var date Unverified phone hold until the date (from ...) in format: YYYY-MM-DD */
    public $from_unverified_hold_until;

    /** @var date Unverified phone hold until the date (... to) in format: YYYY-MM-DD */
    public $to_unverified_hold_until;

    /** @var boolean Unverified account can use the phone */
    public $can_be_used;

    /** @var string The following values are available: 'phone_number' (ascent order), 'phone_price' (ascent order), 'phone_country_code' (ascent order), 'deactivated' (deactivated first, active last), 'purchase_date' (descent order), 'phone_next_renewal' (ascent order), 'verification_status', 'unverified_hold_until' (ascent order), 'verification_name' */
    public $order_by;

    /** @var string Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers. The following values are possible: 'all', 'true', 'false' */
    public $sandbox;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    /** @var boolean The flag of the SMS support */
    public $sms_supported;

    /** @var stringlist The region names list separated by the ';' symbol */
    public $phone_region_name;

    /** @var intlist The rule ID list separated by the ';' symbol */
    public $rule_id;

    /** @var stringlist The rule names list separated by the ';' symbol. Can be used only if __application_id__ or __application_name__ is specified */
    public $rule_name;

    /** @var boolean Number is bound to some rule */
    public $is_bound_to_rule;
}
