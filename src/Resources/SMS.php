<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\ControlSmsReturn;
use Voximplant\Interfaces\GetSmsHistoryReturn;
use Voximplant\Interfaces\SMSInterface;
use Voximplant\Interfaces\SendSmsMessageReturn;

class SMS implements SMSInterface
{
	protected $client;

	/** @object SendSmsMessage */
	protected $SendSmsMessageReturn;

	/** @object ControlSms */
	protected $ControlSmsReturn;

	/** @object GetSmsHistory */
	protected $GetSmsHistoryReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->SendSmsMessageReturn = new SendSmsMessageReturn();
		$this->ControlSmsReturn = new ControlSmsReturn();
		$this->GetSmsHistoryReturn = new GetSmsHistoryReturn();
	}


	/**
	 * @method Send SMS message between two phone numbers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the is_sms_supported property in the objects returned by the /GetPhoneNumbers HTTP API) and SMS should be enabled for it via the /ControlSms HTTP API. SMS messages can be received via HTTP callbacks, see this article for details.
	 */
	public function SendSmsMessage(Params\SendSmsMessageParams $params = null): SendSmsMessageReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SendSmsMessageReturn->$key = $value;
		}
		return $this->SendSmsMessageReturn;
	}


	/**
	 * @method Enable or disable SMS sending and receiving for the phone number. Can be used only for phone numbers with SMS support, which is indicated by the is_sms_supported property in the objects returned by the /GetPhoneNumbers HTTP API. Each inbound SMS message is billed according to the pricing. If enabled, SMS can be sent from this phone number using the /SendSmsMessage HTTP API and received using the [InboundSmsCallback] property of the HTTP callback. See this article for HTTP callback details.
	 */
	public function ControlSms(Params\ControlSmsParams $params = null): ControlSmsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->ControlSmsReturn->$key = $value;
		}
		return $this->ControlSmsReturn;
	}


	/**
	 * @method Get history of sent and/or received SMS.
	 */
	public function GetSmsHistory(Params\GetSmsHistoryParams $params = null): GetSmsHistoryReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetSmsHistoryReturn->$key = $value;
		}
		return $this->GetSmsHistoryReturn;
	}
}
