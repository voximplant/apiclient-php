<?php

namespace Voximplant\Resources\Params;

class GetTransactionHistoryParams
{
    /** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_date;

    /** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_date;

    /** @var intlist The transaction ID list separated by the ';' symbol. */
    public $transaction_id;

    /** @var string The external payment reference to filter. */
    public $payment_reference;

    /** @var stringlist The transaction type list separated by the ';' symbol. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund. */
    public $transaction_type;

    /** @var intlist The user ID list separated by the ';' symbol. */
    public $user_id;

    /** @var intlist The child account ID list separated by the ';' symbol or the 'all' value. */
    public $child_account_id;

    /** @var boolean Set true to get the children account transactions only. */
    public $children_transactions_only;

    /** @var boolean Set true to get the users' transactions only. */
    public $users_transactions_only;

    /** @var boolean Set true to get records in the descent order. */
    public $desc_order;

    /** @var number The max returning record count. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;

    /** @var string The output format. The following values available: json, csv */
    public $output;

    /** @var boolean Set true to get records in the asynchronous mode (for csv output only). See the [GetHistoryReports], [DownloadHistoryReport] functions. */
    public $is_async;
}
