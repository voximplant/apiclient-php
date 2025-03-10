<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\ActivateOutboundTestPhoneNumberReturn;
use Voximplant\Interfaces\AddOutboundTestPhoneNumberReturn;
use Voximplant\Interfaces\DelOutboundTestPhoneNumberReturn;
use Voximplant\Interfaces\GetOutboundTestPhoneNumbersReturn;
use Voximplant\Interfaces\OutboundTestNumbersInterface;
use Voximplant\Interfaces\VerifyOutboundTestPhoneNumberReturn;

class OutboundTestNumbers implements OutboundTestNumbersInterface
{
    protected $client;

    /** @object AddOutboundTestPhoneNumber */
    protected $AddOutboundTestPhoneNumberReturn;

    /** @object VerifyOutboundTestPhoneNumber */
    protected $VerifyOutboundTestPhoneNumberReturn;

    /** @object ActivateOutboundTestPhoneNumber */
    protected $ActivateOutboundTestPhoneNumberReturn;

    /** @object DelOutboundTestPhoneNumber */
    protected $DelOutboundTestPhoneNumberReturn;

    /** @object GetOutboundTestPhoneNumbers */
    protected $GetOutboundTestPhoneNumbersReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddOutboundTestPhoneNumberReturn = new AddOutboundTestPhoneNumberReturn();
        $this->VerifyOutboundTestPhoneNumberReturn = new VerifyOutboundTestPhoneNumberReturn();
        $this->ActivateOutboundTestPhoneNumberReturn = new ActivateOutboundTestPhoneNumberReturn();
        $this->DelOutboundTestPhoneNumberReturn = new DelOutboundTestPhoneNumberReturn();
        $this->GetOutboundTestPhoneNumbersReturn = new GetOutboundTestPhoneNumbersReturn();
    }

    /**
     * @method Adds a personal phone number to test outgoing calls. Only one personal phone number can be used. To replace it with another, delete the existing one first.
     */
    public function AddOutboundTestPhoneNumber(Params\AddOutboundTestPhoneNumberParams $params = null): AddOutboundTestPhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddOutboundTestPhoneNumberReturn->$key = $value;
        }
        return $this->AddOutboundTestPhoneNumberReturn;
    }

    /**
     * @method Starts a call to the added phone number and pronounces a verification code. You have only 5 verification attempts per day and 100 in total. 1 minute should pass between 2 attempts.
     */
    public function VerifyOutboundTestPhoneNumber(Params\VerifyOutboundTestPhoneNumberParams $params = null): VerifyOutboundTestPhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->VerifyOutboundTestPhoneNumberReturn->$key = $value;
        }
        return $this->VerifyOutboundTestPhoneNumberReturn;
    }

    /**
     * @method Activates the phone number by the verification code.
     */
    public function ActivateOutboundTestPhoneNumber(Params\ActivateOutboundTestPhoneNumberParams $params = null): ActivateOutboundTestPhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->ActivateOutboundTestPhoneNumberReturn->$key = $value;
        }
        return $this->ActivateOutboundTestPhoneNumberReturn;
    }

    /**
     * @method Deletes the existing phone number.
     */
    public function DelOutboundTestPhoneNumber(Params\DelOutboundTestPhoneNumberParams $params = null): DelOutboundTestPhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelOutboundTestPhoneNumberReturn->$key = $value;
        }
        return $this->DelOutboundTestPhoneNumberReturn;
    }

    /**
     * @method Shows the phone number info.
     */
    public function GetOutboundTestPhoneNumbers(Params\GetOutboundTestPhoneNumbersParams $params = null): GetOutboundTestPhoneNumbersReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetOutboundTestPhoneNumbersReturn->$key = $value;
        }
        return $this->GetOutboundTestPhoneNumbersReturn;
    }
}
