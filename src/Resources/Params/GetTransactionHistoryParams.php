<?php

namespace Voximplant\Resources\Params;

class GetTransactionHistoryParams
{
    /** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_date;

    /** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_date;

    /** @var intlist The transaction ID list separated by the ';' symbol */
    public $transaction_id;

    /** @var string The external payment reference to filter */
    public $payment_reference;

    /** @var stringlist The transaction type list separated by the ';' symbol. The following values are possible: resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, rub_card_periodic_payment, rub_card_overrun_payment, rub_card_payment, robokassa_payment, gift, promo, adjustment, wire_transfer, us_wire_transfer, refund, discount, mgp_charge, mgp_startup, mgp_business, mgp_big_business, mgp_enterprise, mgp_large_enterprise, techsupport_charge, tax_charge, monthly_fee_charge, grace_credit_payment, grace_credit_provision, mau_charge, mau_overrun, im_charge, im_overrun, fmc_charge, sip_registration_charge, development_fee, money_transfer_to_child, money_transfer_to_parent, money_acceptance_from_child, money_acceptance_from_parent, phone_number_installation, phone_number_charge, toll_free_phone_number_installation, toll_free_phone_number_charge */
    public $transaction_type;

    /** @var intlist The user ID list separated by the ';' symbol */
    public $user_id;

    /** @var intlist The child account ID list separated by the ';' symbol. Use the 'all' value to select all child accounts */
    public $child_account_id;

    /** @var boolean Set true to get the children account transactions only */
    public $children_transactions_only;

    /** @var boolean Set true to get the users' transactions only */
    public $users_transactions_only;

    /** @var boolean Set true to get records in the descent order */
    public $desc_order;

    /** @var number The number of returning records. In the synchronous mode, the maximum value is 1000 */
    public $count;

    /** @var number The number of records to skip in the output with a maximum value of 10000 */
    public $offset;

    /** @var string The output format. The following values available: json, csv */
    public $output;

    /** @var boolean Set true to get records in the asynchronous mode (for csv output only). Use this mode to download large amounts of data. See the [GetHistoryReports], [DownloadHistoryReport] functions for details */
    public $is_async;

    /** @var boolean Set true to get transactions on hold (transactions for which money is reserved but not yet withdrawn from the account) */
    public $is_uncommitted;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'transaction_id' => $this->transaction_id,
                    'payment_reference' => $this->payment_reference,
                    'transaction_type' => $this->transaction_type,
                    'user_id' => $this->user_id,
                    'child_account_id' => $this->child_account_id,
                    'children_transactions_only' => $this->children_transactions_only !== null ? (filter_var($this->children_transactions_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'users_transactions_only' => $this->users_transactions_only !== null ? (filter_var($this->users_transactions_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'output' => $this->output,
                    'is_async' => $this->is_async !== null ? (filter_var($this->is_async, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'is_uncommitted' => $this->is_uncommitted !== null ? (filter_var($this->is_uncommitted, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
