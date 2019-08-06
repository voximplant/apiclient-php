<?php

namespace Voximplant\Resources\Params;

class TransferMoneyToUserParams
{
	/** @var intlist The user ID list separated by the ';' symbol or the 'all' value. */
	public $user_id;

	/** @var stringlist The user name list separated by the ';' symbol that can be used instead of user_id. */
	public $user_name;

	/** @var decimal The money amount, $. The absolute amount value must be equal or greater than 0.01 */
	public $amount;

	/** @var number The application ID. It is required if the user_name is specified. */
	public $application_id;

	/** @var string The application name that can be used instead of application_id. */
	public $application_name;

	/** @var string The amount currency. Examples: RUR, EUR, USD. */
	public $currency;

	/** @var boolean Returns error if strict_mode is true and a user or the account hasn't enough money. */
	public $strict_mode;

	/** @var string The user transaction description. */
	public $user_transaction_description;

	/** @var string The account transaction description. The following macro available: ${user_id}, ${user_name} */
	public $account_transaction_description;
}
