<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumbersParams
{
    /** @var intlist The particular phone ID to filter */
    public $phone_id;

    /** @var stringlist The phone number list separated by semicolons (;) that can be used instead of phone_id */
    public $phone_number;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var boolean Whether the phone number bound to an application */
    public $is_bound_to_application;

    /** @var string The phone number start to filter */
    public $phone_template;

    /** @var stringlist The country code list separated by semicolons (;) */
    public $country_code;

    /** @var string The phone category name. See the [GetPhoneNumberCategories] method */
    public $phone_category_name;

    /** @var boolean Whether the subscription is cancelled to filter */
    public $canceled;

    /** @var boolean Whether the subscription is frozen to filter */
    public $deactivated;

    /** @var boolean Whether the auto_charge flag is enabled */
    public $auto_charge;

    /** @var date The UTC 'from' date filter in format: YYYY-MM-DD */
    public $from_phone_next_renewal;

    /** @var date The UTC 'to' date filter in format: YYYY-MM-DD */
    public $to_phone_next_renewal;

    /** @var timestamp The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_phone_purchase_date;

    /** @var timestamp The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_phone_purchase_date;

    /** @var intlist The child account ID list separated by semicolons (;). Use the 'all' value to select all child accounts */
    public $child_account_id;

    /** @var boolean Whether to get the children phones only */
    public $children_phones_only;

    /** @var string The required account verification name to filter */
    public $verification_name;

    /** @var stringlist The account verification status list separated by semicolons (;). The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED */
    public $verification_status;

    /** @var date Unverified phone hold until the date (from ...) in format: YYYY-MM-DD */
    public $from_unverified_hold_until;

    /** @var date Unverified phone hold until the date (... to) in format: YYYY-MM-DD */
    public $to_unverified_hold_until;

    /** @var boolean Whether a not verified account can use the phone */
    public $can_be_used;

    /** @var string The following values are available: 'phone_number' (ascent order), 'phone_price' (ascent order), 'phone_country_code' (ascent order), 'deactivated' (deactivated first, active last), 'purchase_date' (descent order), 'phone_next_renewal' (ascent order), 'verification_status', 'unverified_hold_until' (ascent order), 'verification_name' */
    public $order_by;

    /** @var string Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers. The following values are possible: 'all', 'true', 'false' */
    public $sandbox;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var boolean Whether the SMS support is enabled */
    public $sms_supported;

    /** @var stringlist The region names list separated by semicolons (;) */
    public $phone_region_name;

    /** @var intlist The rule ID list separated by semicolons (;) */
    public $rule_id;

    /** @var stringlist The rule names list separated by semicolons (;). Can be used only if __application_id__ or __application_name__ is specified */
    public $rule_name;

    /** @var boolean Whether the phone number is bound to some rule */
    public $is_bound_to_rule;

    public function toArray()
    {
        return [
                'phone_id' => $this->phone_id,
                    'phone_number' => $this->phone_number,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'is_bound_to_application' => $this->is_bound_to_application !== null ? (filter_var($this->is_bound_to_application, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'phone_template' => $this->phone_template,
                    'country_code' => $this->country_code,
                    'phone_category_name' => $this->phone_category_name,
                    'canceled' => $this->canceled !== null ? (filter_var($this->canceled, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'deactivated' => $this->deactivated !== null ? (filter_var($this->deactivated, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'auto_charge' => $this->auto_charge !== null ? (filter_var($this->auto_charge, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'from_phone_next_renewal' => $this->from_phone_next_renewal,
                    'to_phone_next_renewal' => $this->to_phone_next_renewal,
                    'from_phone_purchase_date' => $this->from_phone_purchase_date,
                    'to_phone_purchase_date' => $this->to_phone_purchase_date,
                    'child_account_id' => $this->child_account_id,
                    'children_phones_only' => $this->children_phones_only !== null ? (filter_var($this->children_phones_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'verification_name' => $this->verification_name,
                    'verification_status' => $this->verification_status,
                    'from_unverified_hold_until' => $this->from_unverified_hold_until,
                    'to_unverified_hold_until' => $this->to_unverified_hold_until,
                    'can_be_used' => $this->can_be_used !== null ? (filter_var($this->can_be_used, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'order_by' => $this->order_by,
                    'sandbox' => $this->sandbox,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'sms_supported' => $this->sms_supported !== null ? (filter_var($this->sms_supported, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'phone_region_name' => $this->phone_region_name,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'is_bound_to_rule' => $this->is_bound_to_rule !== null ? (filter_var($this->is_bound_to_rule, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
