<?php

namespace Voximplant\Interfaces;

interface OutboundTestNumbersInterface
{
    /**
     * @method Adds a personal phone number to test outgoing calls. Only one personal phone number can be used. To replace it with another, delete the existing one first.
     */
    public function AddOutboundTestPhoneNumber(\Voximplant\Resources\Params\AddOutboundTestPhoneNumberParams $params);

    /**
     * @method Starts a call to the added phone number and pronounces a verification code. You have only 5 verification attempts per day and 100 in total. 1 minute should pass between 2 attempts.
     */
    public function VerifyOutboundTestPhoneNumber(\Voximplant\Resources\Params\VerifyOutboundTestPhoneNumberParams $params);

    /**
     * @method Activates the phone number by the verification code.
     */
    public function ActivateOutboundTestPhoneNumber(\Voximplant\Resources\Params\ActivateOutboundTestPhoneNumberParams $params);

    /**
     * @method Deletes the existing phone number.
     */
    public function DelOutboundTestPhoneNumber(\Voximplant\Resources\Params\DelOutboundTestPhoneNumberParams $params);

    /**
     * @method Shows the phone number info.
     */
    public function GetOutboundTestPhoneNumbers(\Voximplant\Resources\Params\GetOutboundTestPhoneNumbersParams $params);
}
class AddOutboundTestPhoneNumberReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class VerifyOutboundTestPhoneNumberReturn
{
    /** @var number The number of attempts left for the day. The number is reset every day at 00:00 UTC */
    public $daily_attempts_left;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class ActivateOutboundTestPhoneNumberReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelOutboundTestPhoneNumberReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetOutboundTestPhoneNumbersReturn
{
    /** @var [OutboundTestPhonenumberInfoType] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
