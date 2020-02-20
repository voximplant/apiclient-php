<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AttachPhoneNumberReturn;
use Voximplant\Interfaces\BindPhoneNumberToApplicationReturn;
use Voximplant\Interfaces\DeactivatePhoneNumberReturn;
use Voximplant\Interfaces\GetActualPhoneNumberRegionReturn;
use Voximplant\Interfaces\GetNewPhoneNumbersReturn;
use Voximplant\Interfaces\GetPhoneNumberCategoriesReturn;
use Voximplant\Interfaces\GetPhoneNumberCountryStatesReturn;
use Voximplant\Interfaces\GetPhoneNumberRegionsReturn;
use Voximplant\Interfaces\GetPhoneNumbersReturn;
use Voximplant\Interfaces\PhoneNumbersInterface;

class PhoneNumbers implements PhoneNumbersInterface
{
    protected $client;

    /** @object AttachPhoneNumber */
    protected $AttachPhoneNumberReturn;

    /** @object BindPhoneNumberToApplication */
    protected $BindPhoneNumberToApplicationReturn;

    /** @object DeactivatePhoneNumber */
    protected $DeactivatePhoneNumberReturn;

    /** @object GetPhoneNumbers */
    protected $GetPhoneNumbersReturn;

    /** @object GetNewPhoneNumbers */
    protected $GetNewPhoneNumbersReturn;

    /** @object GetPhoneNumberCategories */
    protected $GetPhoneNumberCategoriesReturn;

    /** @object GetPhoneNumberCountryStates */
    protected $GetPhoneNumberCountryStatesReturn;

    /** @object GetPhoneNumberRegions */
    protected $GetPhoneNumberRegionsReturn;

    /** @object GetActualPhoneNumberRegion */
    protected $GetActualPhoneNumberRegionReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AttachPhoneNumberReturn = new AttachPhoneNumberReturn();
        $this->BindPhoneNumberToApplicationReturn = new BindPhoneNumberToApplicationReturn();
        $this->DeactivatePhoneNumberReturn = new DeactivatePhoneNumberReturn();
        $this->GetPhoneNumbersReturn = new GetPhoneNumbersReturn();
        $this->GetNewPhoneNumbersReturn = new GetNewPhoneNumbersReturn();
        $this->GetPhoneNumberCategoriesReturn = new GetPhoneNumberCategoriesReturn();
        $this->GetPhoneNumberCountryStatesReturn = new GetPhoneNumberCountryStatesReturn();
        $this->GetPhoneNumberRegionsReturn = new GetPhoneNumberRegionsReturn();
        $this->GetActualPhoneNumberRegionReturn = new GetActualPhoneNumberRegionReturn();
    }

    /**
     * @method Attach the phone number to the account. Note that phone numbers of some countries may require additional verification steps.
     */
    public function AttachPhoneNumber(Params\AttachPhoneNumberParams $params = null): AttachPhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AttachPhoneNumberReturn->$key = $value;
        }
        return $this->AttachPhoneNumberReturn;
    }

    /**
     * @method Bind the phone number to the application or unbind the phone number from the application. You should specify the application_id or application_name if you specify the rule_name.
     */
    public function BindPhoneNumberToApplication(Params\BindPhoneNumberToApplicationParams $params = null): BindPhoneNumberToApplicationReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->BindPhoneNumberToApplicationReturn->$key = $value;
        }
        return $this->BindPhoneNumberToApplicationReturn;
    }

    /**
     * @method Deactivates the phone number.
     */
    public function DeactivatePhoneNumber(Params\DeactivatePhoneNumberParams $params = null): DeactivatePhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DeactivatePhoneNumberReturn->$key = $value;
        }
        return $this->DeactivatePhoneNumberReturn;
    }

    /**
     * @method Gets the account phone numbers.
     */
    public function GetPhoneNumbers(Params\GetPhoneNumbersParams $params = null): GetPhoneNumbersReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetPhoneNumbersReturn->$key = $value;
        }
        return $this->GetPhoneNumbersReturn;
    }

    /**
     * @method Gets the new phone numbers.
     */
    public function GetNewPhoneNumbers(Params\GetNewPhoneNumbersParams $params = null): GetNewPhoneNumbersReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetNewPhoneNumbersReturn->$key = $value;
        }
        return $this->GetNewPhoneNumbersReturn;
    }

    /**
     * @method Gets the phone number categories.
     */
    public function GetPhoneNumberCategories(Params\GetPhoneNumberCategoriesParams $params = null): GetPhoneNumberCategoriesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetPhoneNumberCategoriesReturn->$key = $value;
        }
        return $this->GetPhoneNumberCategoriesReturn;
    }

    /**
     * @method Gets the phone number country states.
     */
    public function GetPhoneNumberCountryStates(Params\GetPhoneNumberCountryStatesParams $params = null): GetPhoneNumberCountryStatesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetPhoneNumberCountryStatesReturn->$key = $value;
        }
        return $this->GetPhoneNumberCountryStatesReturn;
    }

    /**
     * @method Get the country regions of the phone numbers. The response will also contain the info about multiple numbers subscription for the child accounts.
     */
    public function GetPhoneNumberRegions(Params\GetPhoneNumberRegionsParams $params = null): GetPhoneNumberRegionsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetPhoneNumberRegionsReturn->$key = $value;
        }
        return $this->GetPhoneNumberRegionsReturn;
    }

    /**
     * @method Get actual info the country region of the phone numbers. The response will also contain the info about multiple numbers subscription for the child accounts.
     */
    public function GetActualPhoneNumberRegion(Params\GetActualPhoneNumberRegionParams $params = null): GetActualPhoneNumberRegionReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetActualPhoneNumberRegionReturn->$key = $value;
        }
        return $this->GetActualPhoneNumberRegionReturn;
    }
}
