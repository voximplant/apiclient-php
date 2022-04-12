<?php

namespace Voximplant\Interfaces;

interface SMSInterface
{
    /**
     * @method Sends an SMS message between two phone numbers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the <b>is_sms_supported</b> property in the objects returned by the [GetPhoneNumbers] Management API) and SMS should be enabled for it via the [ControlSms] Management API. SMS messages can be received via HTTP callbacks, see <a href='/docs/howtos/integration/httpapi/callbacks'>this article</a> for details.
     */
    public function SendSmsMessage(\Voximplant\Resources\Params\SendSmsMessageParams $params);

    /**
     * @method Sends an SMS message from the application to customers. The source phone number should be purchased from Voximplant and support SMS (which is indicated by the <b>is_sms_supported</b> property in the objects returned by the <a href='//voximplant.com/docs/references/httpapi/managing_phone_numbers#getphonenumbers'>/GetPhoneNumbers</a> Management API) and SMS should be enabled for it via the <a href='//voximplant.com/docs/references/httpapi/managing_sms#controlsms'>/ControlSms</a> Management API.
     */
    public function A2PSendSms(\Voximplant\Resources\Params\A2PSendSmsParams $params);

    /**
     * @method Enables or disables sending and receiving SMS for the phone number. Can be used only for phone numbers with SMS support, which is indicated by the <b>is_sms_supported</b> property in the objects returned by the [GetPhoneNumbers] Management API. Each inbound SMS message is charged according to the <a href='//voximplant.com/pricing'>pricing</a>. If enabled, SMS can be sent from this phone number using the [SendSmsMessage] Management API and received using the [InboundSmsCallback] property of the HTTP callback. See <a href='/docs/howtos/integration/httpapi/callbacks'>this article</a> for HTTP callback details.
     */
    public function ControlSms(\Voximplant\Resources\Params\ControlSmsParams $params);

    /**
     * @method Gets the history of sent and/or received SMS.
     */
    public function GetSmsHistory(\Voximplant\Resources\Params\GetSmsHistoryParams $params);

    /**
     * @method Gets the history of sent/or received A2P SMS.
     */
    public function A2PGetSmsHistory(\Voximplant\Resources\Params\A2PGetSmsHistoryParams $params);
}
class SendSmsMessageReturn
{
    /** @var number */
    public $result;

    /** @var number The number of fragments the message was divided into */
    public $fragments_count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class A2PSendSmsReturn
{
    /** @var [SmsTransaction] */
    public $result;

    /** @var [FailedSms] */
    public $failed;

    /** @var number The number of fragments the message is divided into */
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
class GetSmsHistoryReturn
{
    /** @var [SmsHistoryType] */
    public $result;

    /** @var number Total number of messages matching the query parameters */
    public $total_count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class A2PGetSmsHistoryReturn
{
    /** @var [A2PSmsHistoryType] */
    public $result;

    /** @var number Total number of messages matching the query parameters */
    public $total_count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
