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
     * @method Get the recommended money amount to charge.
     */
    public function GetMoneyAmountToCharge(\Voximplant\Resources\Params\GetMoneyAmountToChargeParams $params);

    /**
     * @method Configures the account's plan.<br><br>Please note that when you change the billing plan, we reserve the subscription fee and taxes for the upcoming month. Read more in the <a href='/docs/gettingstarted/billing'>Billing</a> page.
     */
    public function ChangeAccountPlan(\Voximplant\Resources\Params\ChangeAccountPlanParams $params);

    /**
     * @method Gets the account plans with packages.
     */
    public function GetAccountPlans(\Voximplant\Resources\Params\GetAccountPlansParams $params);

    /**
     * @method Gets the allowed plans to change.
     */
    public function GetAvailablePlans(\Voximplant\Resources\Params\GetAvailablePlansParams $params);

    /**
     * @method Gets the account documents and the verification states.<br><br>This method will be deprecated in the next versions. We recommend to use the [GetAccountVerifications](/docs/references/httpapi/accounts#getaccountverifications) method to get all the verifications and statuses for the account.
     */
    public function GetAccountDocuments(\Voximplant\Resources\Params\GetAccountDocumentsParams $params);

    /**
     * @method Gets all RU verifications for the specified account.
     */
    public function GetAccountVerifications(\Voximplant\Resources\Params\GetAccountVerificationsParams $params);
}
class GetAccountInfoReturn
{
    /** @var AccountInfoType Account's info as the [AccountInfoType] object instance */
    public $result;

    /** @var string The preferred address for the Management API requests */
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
    /** @var ExchangeRatesType The exchange rates */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetResourcePriceReturn
{
    /** @var [ResourcePrice] The resource prices */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetSubscriptionPriceReturn
{
    /** @var [SubscriptionTemplateType] The subscription template prices */
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

    /** @var number The total found user count */
    public $total_count;

    /** @var number The returned user count */
    public $count;

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
class ChangeAccountPlanReturn
{
    /** @var number 1 */
    public $result;

    /** @var ShortAccountInfoType The current account state */
    public $account_info;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAccountPlansReturn
{
    /** @var [AccountPlanType] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAvailablePlansReturn
{
    /** @var [PlanType] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAccountDocumentsReturn
{
    /** @var [AccountDocumentsType] The account documents with verification states */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAccountVerificationsReturn
{
    /** @var [AccountVerificationsType] Account verifications */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
