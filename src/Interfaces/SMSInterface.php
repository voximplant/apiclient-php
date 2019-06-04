<?php

namespace Voximplant\Interfaces;

interface SMSInterface
{
	/**
	 * @method Send SMS message between two phone numbers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the <b>is_sms_supported</b> property in the objects returned by the <a href='//voximplant.com/docs/references/httpapi/managing_phone_numbers#getphonenumbers'>/GetPhoneNumbers</a> HTTP API) and SMS should be enabled for it via the <a href='//voximplant.com/docs/references/httpapi/managing_sms#controlsms'>/ControlSms</a> HTTP API. SMS messages can be received via HTTP callbacks, see <a href='//voximplant.com/blog/http-api-callbacks'>this article</a> for details.
	 */
	public function SendSmsMessage(\Voximplant\Resources\Params\SendSmsMessageParams $params);


	/**
	 * @method Enable or disable SMS sending and receiving for the phone number. Can be used only for phone numbers with SMS support, which is indicated by the <b>is_sms_supported</b> property in the objects returned by the <a href='//voximplant.com/docs/references/httpapi/managing_phone_numbers#getphonenumbers'>/GetPhoneNumbers</a> HTTP API. Each inbound SMS message is billed according to the <a href='//voximplant.com/pricing'>pricing</a>. If enabled, SMS can be sent from this phone number using the <a href='//voximplant.com/docs/references/httpapi/managing_sms#sendsmsmessage'>/SendSmsMessage</a> HTTP API and received using the [InboundSmsCallback] property of the HTTP callback. See <a href='//voximplant.com/blog/http-api-callbacks'>this article</a> for HTTP callback details.
	 */
	public function ControlSms(\Voximplant\Resources\Params\ControlSmsParams $params);
}
class SendSmsMessageReturn
{
	/** @var number */
	public $result;

	/** @var number The number of fragments to which the message divided. */
	public $fragments_count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class ControlSmsReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
