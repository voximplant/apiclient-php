<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\A2PGetSmsHistoryReturn;
use Voximplant\Interfaces\A2PSendSmsReturn;
use Voximplant\Interfaces\ControlSmsReturn;
use Voximplant\Interfaces\GetSmsHistoryReturn;
use Voximplant\Interfaces\SMSInterface;
use Voximplant\Interfaces\SendSmsMessageReturn;

class SMS implements SMSInterface
{
    protected $client;

    /** @object SendSmsMessage */
    protected $SendSmsMessageReturn;

    /** @object A2PSendSms */
    protected $A2PSendSmsReturn;

    /** @object ControlSms */
    protected $ControlSmsReturn;

    /** @object GetSmsHistory */
    protected $GetSmsHistoryReturn;

    /** @object A2PGetSmsHistory */
    protected $A2PGetSmsHistoryReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->SendSmsMessageReturn = new SendSmsMessageReturn();
        $this->A2PSendSmsReturn = new A2PSendSmsReturn();
        $this->ControlSmsReturn = new ControlSmsReturn();
        $this->GetSmsHistoryReturn = new GetSmsHistoryReturn();
        $this->A2PGetSmsHistoryReturn = new A2PGetSmsHistoryReturn();
    }

    /**
     * @method Sends an SMS message between two phone numbers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the is_sms_supported property in the objects returned by the [GetPhoneNumbers] Management API) and SMS should be enabled for it via the [ControlSms] Management API. SMS messages can be received via HTTP callbacks, see this article for details.
     */
    public function SendSmsMessage(Params\SendSmsMessageParams $params = null): SendSmsMessageReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SendSmsMessageReturn->$key = $value;
        }
        return $this->SendSmsMessageReturn;
    }

    /**
     * @method Sends an SMS message from the application to customers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the is_sms_supported property in the objects returned by the /GetPhoneNumbers Management API) and SMS should be enabled for it via the /ControlSms Management API.
     */
    public function A2PSendSms(Params\A2PSendSmsParams $params = null): A2PSendSmsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->A2PSendSmsReturn->$key = $value;
        }
        return $this->A2PSendSmsReturn;
    }

    /**
     * @method Enables or disables sending and receiving SMS for the phone number. Can be used only for phone numbers with SMS support, which is indicated by the is_sms_supported property in the objects returned by the [GetPhoneNumbers] Management API. Each incoming SMS message is charged according to the pricing. If enabled, SMS can be sent from this phone number via the [SendSmsMessage] Management API and received via the [InboundSmsCallback] property of the HTTP callback. See this article for HTTP callback details.
     */
    public function ControlSms(Params\ControlSmsParams $params = null): ControlSmsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->ControlSmsReturn->$key = $value;
        }
        return $this->ControlSmsReturn;
    }

    /**
     * @method Gets the history of sent and/or received SMS.
     */
    public function GetSmsHistory(Params\GetSmsHistoryParams $params = null): GetSmsHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSmsHistoryReturn->$key = $value;
        }
        return $this->GetSmsHistoryReturn;
    }

    /**
     * @method Gets the history of sent/or received A2P SMS.
     */
    public function A2PGetSmsHistory(Params\A2PGetSmsHistoryParams $params = null): A2PGetSmsHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->A2PGetSmsHistoryReturn->$key = $value;
        }
        return $this->A2PGetSmsHistoryReturn;
    }
}
