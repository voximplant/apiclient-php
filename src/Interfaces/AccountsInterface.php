<?php

namespace Voximplant\Interfaces;

interface AccountsInterface
{
	/**
	 * @method Gets the account's info such as account_id, account_name, account_email etc.
	 */
	public function GetAccountInfo(\Voximplant\Resources\Params\GetAccountInfoParams $params);


	/**
	 * @method Edits the account's profile.
	 */
	public function SetAccountInfo(\Voximplant\Resources\Params\SetAccountInfoParams $params);


	/**
	 * @method Edits the account's profile.
	 */
	public function SetChildAccountInfo(\Voximplant\Resources\Params\SetChildAccountInfoParams $params);


	/**
	 * @method Gets the exchange rate on selected date (per USD).
	 */
	public function GetCurrencyRate(\Voximplant\Resources\Params\GetCurrencyRateParams $params);


	/**
	 * @method Gets the resource price.
	 */
	public function GetResourcePrice(\Voximplant\Resources\Params\GetResourcePriceParams $params);


	/**
	 * @method Gets the subscription template price.
	 */
	public function GetSubscriptionPrice(\Voximplant\Resources\Params\GetSubscriptionPriceParams $params);


	/**
	 * @method Gets the info about all children accounts.
	 */
	public function GetChildrenAccounts(\Voximplant\Resources\Params\GetChildrenAccountsParams $params);


	/**
	 * @method Transfer the parent account's money to the child account or transfer the child's money to the parent account if the money amount is negative.
	 */
	public function TransferMoneyToChildAccount(\Voximplant\Resources\Params\TransferMoneyToChildAccountParams $params);


	/**
	 * @method Get the recommended money amount to charge.
	 */
	public function GetMoneyAmountToCharge(\Voximplant\Resources\Params\GetMoneyAmountToChargeParams $params);


	/**
	 * @method Charges the account in the manual mode. You should call the ChargeAccount function to charge the subscriptions having the auto_charge=false.
	 */
	public function ChargeAccount(\Voximplant\Resources\Params\ChargeAccountParams $params);


	/**
	 * @method Gets the account documents and the verification states.
	 */
	public function GetAccountDocuments(\Voximplant\Resources\Params\GetAccountDocumentsParams $params);
}
class GetAccountInfoReturn
{
	/** @var AccountInfoType Account's info as the [AccountInfoType] object instance. */
	public $result;

	/** @var string The preferred address for the http api requests. */
	public $api_address;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetAccountInfoReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetChildAccountInfoReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetCurrencyRateReturn
{
	/** @var ExchangeRates The exchange rates. */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetResourcePriceReturn
{
	/** @var [ResourcePrice] The resource prices. */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetSubscriptionPriceReturn
{
	/** @var [SubscriptionTemplateType] The subscription template prices. */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetChildrenAccountsReturn
{
	/** @var [AccountInfoType] */
	public $result;

	/** @var number The total found user count. */
	public $total_count;

	/** @var number The returned user count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class TransferMoneyToChildAccountReturn
{
	/** @var number 1 */
	public $result;

	/** @var decimal The updated parent's account balance. */
	public $balance;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetMoneyAmountToChargeReturn
{
	/** @var GetMoneyAmountToChargeResult Result */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class ChargeAccountReturn
{
	/** @var ChargeAccountResult Result */
	public $result;

	/** @var ShortAccountInfoType The current account state. */
	public $account_info;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetAccountDocumentsReturn
{
	/** @var [AccountVerifications] The account verifications. */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
