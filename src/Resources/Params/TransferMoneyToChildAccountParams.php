<?php

namespace Voximplant\Resources\Params;

class TransferMoneyToChildAccountParams
{
    /** @var intlist The child account ID list separated by the ';' symbol. */
    public $child_account_id;

    /** @var decimal The money amount, $. The absolute amount value must be equal or greater than 0.01 */
    public $amount;

    /** @var string The amount currency (the parent account currency by default). Examples: RUR, EUR, USD. */
    public $currency;

    /** @var boolean Returns error if strict_mode is true and an child account or the parent account hasn't enough money. */
    public $strict_mode;

    /** @var string The child account transaction description. */
    public $child_transaction_description;

    /** @var string The parent account transaction description. The following macro available: ${child_account_id}, ${child_account_name} */
    public $parent_transaction_description;

    /** @var string The external payment reference (extra info). */
    public $payment_reference;

    /** @var timestamp Specify the date in 24-h format: YYYY-MM-DD HH:mm:ss to skip the duplicate transaction. */
    public $check_duplicate_reference_from;
}
