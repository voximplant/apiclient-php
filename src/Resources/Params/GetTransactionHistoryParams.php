<?php

namespace Voximplant\Resources\Params;

class GetTransactionHistoryParams
{
    /** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. If both dates are omitted and is_uncommitted is false, a server-configured default interval is used (default is one month) */
    public $from_date;

    /** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. If both dates are omitted and is_uncommitted is false, a server-configured default interval is used (default is one month) */
    public $to_date;

    /** @var number The application ID to filter. Can be used together with or instead of the application_name parameter */
    public $application_id;

    /** @var string The application name to filter. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var intlist The subscription ID list separated by semicolons (;) to filter */
    public $subscription_id;

    /** @var stringlist The subscription name list separated by semicolons (;) to filter */
    public $subscription_name;

    /** @var stringlist The resource type list separated by semicolons (;) to filter */
    public $resource_type;

    /** @var stringlist The price group name list separated by semicolons (;) to filter */
    public $price_group_name;

    /** @var boolean Whether to filter by the accounting dates instead of the transaction's `performed_at` timestamps */
    public $use_accounting_dates;

    /** @var boolean Whether to include the extended transaction fields, such as the application, subscription, resource type and price group, in the response */
    public $with_extended_info;

    /** @var boolean Whether to create an asynchronous history report instead of returning the data immediately. Has the same effect as calling `GetTransactionHistoryAsync` and requires the output=csv */
    public $is_async;

    /** @var boolean Whether to get a CSV file with the column names if the output=csv */
    public $with_header;

    /** @var string The decimal mark for the CSV numbers if the output=csv. If omitted, the account locale setting is used */
    public $decimal_separator;

    /** @var intlist The transaction ID list separated by semicolons (;) */
    public $transaction_id;

    /** @var string The external payment reference to filter */
    public $payment_reference;

    /** @var stringlist The transaction type list separated by semicolons (;). The following values are possible: gift_revoke, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, rub_card_periodic_payment, rub_card_overrun_payment, rub_card_payment, robokassa_payment, gift, promo, adjustment, wire_transfer, us_wire_transfer, refund, discount, mgp_charge, mgp_startup, mgp_business, mgp_big_business, mgp_enterprise, mgp_large_enterprise, techsupport_charge, tax_charge, monthly_fee_charge, grace_credit_payment, grace_credit_provision, mau_charge, mau_overrun, im_charge, im_overrun, fmc_charge, sip_registration_charge, development_fee, money_transfer_to_child, money_transfer_to_parent, money_acceptance_from_child, money_acceptance_from_parent, phone_number_installation, phone_number_charge, toll_free_phone_number_installation, toll_free_phone_number_charge, services, user_money_transfer, paypal_payment, paypal_overrun_payment, paypal_periodic_payment */
    public $transaction_type;

    /** @var intlist The user ID list separated by semicolons (;) */
    public $user_id;

    /** @var intlist The child account ID list separated by semicolons (;). Use the 'all' value to select all child accounts */
    public $child_account_id;

    /** @var boolean Whether to get the children account transactions only */
    public $children_transactions_only;

    /** @var boolean Whether to get the users' transactions only */
    public $users_transactions_only;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var boolean Whether to include the 'total_count' and increase performance */
    public $with_total_count;

    /** @var number The number of returning records. The maximum value is 1000 */
    public $count;

    /** @var number The number of records to skip in the output with a maximum value of 10000 */
    public $offset;

    /** @var boolean Whether to get transactions on hold (transactions for which money is reserved but not yet withdrawn from the account) */
    public $is_uncommitted;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'subscription_id' => $this->subscription_id,
                    'subscription_name' => $this->subscription_name,
                    'resource_type' => $this->resource_type,
                    'price_group_name' => $this->price_group_name,
                    'use_accounting_dates' => $this->use_accounting_dates !== null ? (filter_var($this->use_accounting_dates, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_extended_info' => $this->with_extended_info !== null ? (filter_var($this->with_extended_info, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'is_async' => $this->is_async !== null ? (filter_var($this->is_async, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'decimal_separator' => $this->decimal_separator,
                    'transaction_id' => $this->transaction_id,
                    'payment_reference' => $this->payment_reference,
                    'transaction_type' => $this->transaction_type,
                    'user_id' => $this->user_id,
                    'child_account_id' => $this->child_account_id,
                    'children_transactions_only' => $this->children_transactions_only !== null ? (filter_var($this->children_transactions_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'users_transactions_only' => $this->users_transactions_only !== null ? (filter_var($this->users_transactions_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_total_count' => $this->with_total_count !== null ? (filter_var($this->with_total_count, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'is_uncommitted' => $this->is_uncommitted !== null ? (filter_var($this->is_uncommitted, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
