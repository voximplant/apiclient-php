<?php

namespace Voximplant\Resources\Params;

class TransferMoneyToUserParams
{
    /** @var intlist The user ID list separated by the ';' symbol. Use the 'all' value to select all users */
    public $user_id;

    /** @var stringlist The user name list separated by the ';' symbol that can be used instead of user_id */
    public $user_name;

    /** @var decimal The money amount, $. The absolute amount value must be equal or greater than 0.01 */
    public $amount;

    /** @var number The application ID. It is required if the user_name is specified */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var string The amount currency. Examples: RUR, EUR, USD */
    public $currency;

    /** @var boolean Returns error if strict_mode is true and a user or the account hasn't enough money */
    public $strict_mode;

    /** @var string The user transaction description */
    public $user_transaction_description;

    /** @var string The account transaction description. The following macro available: ${user_id}, ${user_name} */
    public $account_transaction_description;

    public function toArray()
    {
        return [
                'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'amount' => $this->amount,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'currency' => $this->currency,
                    'strict_mode' => $this->strict_mode !== null ? (filter_var($this->strict_mode, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'user_transaction_description' => $this->user_transaction_description,
                    'account_transaction_description' => $this->account_transaction_description,
            ];
    }
}
