<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AccountsInterface;
use Voximplant\Interfaces\ChangeAccountPlanReturn;
use Voximplant\Interfaces\ChargeAccountReturn;
use Voximplant\Interfaces\GetAccountDocumentsReturn;
use Voximplant\Interfaces\GetAccountInfoReturn;
use Voximplant\Interfaces\GetAccountPlansReturn;
use Voximplant\Interfaces\GetAvailablePlansReturn;
use Voximplant\Interfaces\GetChildrenAccountsReturn;
use Voximplant\Interfaces\GetCurrencyRateReturn;
use Voximplant\Interfaces\GetMoneyAmountToChargeReturn;
use Voximplant\Interfaces\GetResourcePriceReturn;
use Voximplant\Interfaces\GetSubscriptionPriceReturn;
use Voximplant\Interfaces\SetAccountInfoReturn;
use Voximplant\Interfaces\SetChildAccountInfoReturn;

class Accounts implements AccountsInterface
{
    protected $client;

    /** @object GetAccountInfo */
    protected $GetAccountInfoReturn;

    /** @object SetAccountInfo */
    protected $SetAccountInfoReturn;

    /** @object SetChildAccountInfo */
    protected $SetChildAccountInfoReturn;

    /** @object GetCurrencyRate */
    protected $GetCurrencyRateReturn;

    /** @object GetResourcePrice */
    protected $GetResourcePriceReturn;

    /** @object GetSubscriptionPrice */
    protected $GetSubscriptionPriceReturn;

    /** @object GetChildrenAccounts */
    protected $GetChildrenAccountsReturn;

    /** @object GetMoneyAmountToCharge */
    protected $GetMoneyAmountToChargeReturn;

    /** @object ChargeAccount */
    protected $ChargeAccountReturn;

    /** @object ChangeAccountPlan */
    protected $ChangeAccountPlanReturn;

    /** @object GetAccountPlans */
    protected $GetAccountPlansReturn;

    /** @object GetAvailablePlans */
    protected $GetAvailablePlansReturn;

    /** @object GetAccountDocuments */
    protected $GetAccountDocumentsReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetAccountInfoReturn = new GetAccountInfoReturn();
        $this->SetAccountInfoReturn = new SetAccountInfoReturn();
        $this->SetChildAccountInfoReturn = new SetChildAccountInfoReturn();
        $this->GetCurrencyRateReturn = new GetCurrencyRateReturn();
        $this->GetResourcePriceReturn = new GetResourcePriceReturn();
        $this->GetSubscriptionPriceReturn = new GetSubscriptionPriceReturn();
        $this->GetChildrenAccountsReturn = new GetChildrenAccountsReturn();
        $this->GetMoneyAmountToChargeReturn = new GetMoneyAmountToChargeReturn();
        $this->ChargeAccountReturn = new ChargeAccountReturn();
        $this->ChangeAccountPlanReturn = new ChangeAccountPlanReturn();
        $this->GetAccountPlansReturn = new GetAccountPlansReturn();
        $this->GetAvailablePlansReturn = new GetAvailablePlansReturn();
        $this->GetAccountDocumentsReturn = new GetAccountDocumentsReturn();
    }

    /**
     * @method Gets the account's info such as account_id, account_name, account_email etc.
     */
    public function GetAccountInfo(Params\GetAccountInfoParams $params = null): GetAccountInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAccountInfoReturn->$key = $value;
        }
        return $this->GetAccountInfoReturn;
    }

    /**
     * @method Edits the account's profile.
     */
    public function SetAccountInfo(Params\SetAccountInfoParams $params = null): SetAccountInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetAccountInfoReturn->$key = $value;
        }
        return $this->SetAccountInfoReturn;
    }

    /**
     * @method Edits the account's profile.
     */
    public function SetChildAccountInfo(Params\SetChildAccountInfoParams $params = null): SetChildAccountInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetChildAccountInfoReturn->$key = $value;
        }
        return $this->SetChildAccountInfoReturn;
    }

    /**
     * @method Gets the exchange rate on selected date (per USD).
     */
    public function GetCurrencyRate(Params\GetCurrencyRateParams $params = null): GetCurrencyRateReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCurrencyRateReturn->$key = $value;
        }
        return $this->GetCurrencyRateReturn;
    }

    /**
     * @method Gets the resource price.
     */
    public function GetResourcePrice(Params\GetResourcePriceParams $params = null): GetResourcePriceReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetResourcePriceReturn->$key = $value;
        }
        return $this->GetResourcePriceReturn;
    }

    /**
     * @method Gets the subscription template price.
     */
    public function GetSubscriptionPrice(Params\GetSubscriptionPriceParams $params = null): GetSubscriptionPriceReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSubscriptionPriceReturn->$key = $value;
        }
        return $this->GetSubscriptionPriceReturn;
    }

    /**
     * @method Gets the info about all children accounts.
     */
    public function GetChildrenAccounts(Params\GetChildrenAccountsParams $params = null): GetChildrenAccountsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetChildrenAccountsReturn->$key = $value;
        }
        return $this->GetChildrenAccountsReturn;
    }

    /**
     * @method Get the recommended money amount to charge.
     */
    public function GetMoneyAmountToCharge(Params\GetMoneyAmountToChargeParams $params = null): GetMoneyAmountToChargeReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetMoneyAmountToChargeReturn->$key = $value;
        }
        return $this->GetMoneyAmountToChargeReturn;
    }

    /**
     * @method Charges the account in the manual mode. You should call the ChargeAccount function to charge the subscriptions having the auto_charge=false.
     */
    public function ChargeAccount(Params\ChargeAccountParams $params = null): ChargeAccountReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->ChargeAccountReturn->$key = $value;
        }
        return $this->ChargeAccountReturn;
    }

    /**
     * @method Configures the account's plan.Please note that when you change the billing plan, we reserve the subscription fee and taxes for the upcoming month. Read more in the Billing page.
     */
    public function ChangeAccountPlan(Params\ChangeAccountPlanParams $params = null): ChangeAccountPlanReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->ChangeAccountPlanReturn->$key = $value;
        }
        return $this->ChangeAccountPlanReturn;
    }

    /**
     * @method Gets the account plans with packages.
     */
    public function GetAccountPlans(Params\GetAccountPlansParams $params = null): GetAccountPlansReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAccountPlansReturn->$key = $value;
        }
        return $this->GetAccountPlansReturn;
    }

    /**
     * @method Gets the allowed plans to change.
     */
    public function GetAvailablePlans(Params\GetAvailablePlansParams $params = null): GetAvailablePlansReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAvailablePlansReturn->$key = $value;
        }
        return $this->GetAvailablePlansReturn;
    }

    /**
     * @method Gets the account documents and the verification states.
     */
    public function GetAccountDocuments(Params\GetAccountDocumentsParams $params = null): GetAccountDocumentsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAccountDocumentsReturn->$key = $value;
        }
        return $this->GetAccountDocumentsReturn;
    }
}
