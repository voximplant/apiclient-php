<?php

namespace Voximplant\Interfaces;

interface SIPRegistrationInterface
{
    /**
     * @method Creates a new SIP registration (the platform registers as a user on a 3rd party SIP server).<br><br>There are two modes of SIP registration:<br><ol><li>Persistent registration, when the platform registers on a 3rd party SIP server as a user and the registration lasts until deleted (or there are network/technical issues with it — see the corresponding callback)</li><li>Non-persistent registration (set `is_persistent` to false) which is initiated only when the specificed user (with `user_id` or `user_name`) logs in via one of Voximplant SDKs. As soon the user logs off, the registration goes offline. This mode helps to implement SIP softphone-like apps using Voximplant’s SDKs.</li></ol><br>Please note that when you create a SIP registration, we reserve the subscription fee and taxes for the upcoming month. Read more in the <a href='/docs/gettingstarted/billing'>Billing</a> page.
     */
    public function CreateSipRegistration(\Voximplant\Resources\Params\CreateSipRegistrationParams $params);

    /**
     * @method Update SIP registration. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You can bind only one SIP registration to the user (the previous SIP registration is automatically unbound).
     */
    public function UpdateSipRegistration(\Voximplant\Resources\Params\UpdateSipRegistrationParams $params);

    /**
     * @method Bind the SIP registration to the application/user or unbind the SIP registration from the application/user. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You should specify the sip_registration_id if you set bind=true. You can bind only one SIP registration to the user (the previous SIP registration is automatically unbound).
     */
    public function BindSipRegistration(\Voximplant\Resources\Params\BindSipRegistrationParams $params);

    /**
     * @method Delete SIP registration.
     */
    public function DeleteSipRegistration(\Voximplant\Resources\Params\DeleteSipRegistrationParams $params);

    /**
     * @method Get active SIP registrations.
     */
    public function GetSipRegistrations(\Voximplant\Resources\Params\GetSipRegistrationsParams $params);
}
class CreateSipRegistrationReturn
{
    /** @var number Returns 1 if the request has been completed successfully */
    public $result;

    /** @var number The sip registration id */
    public $sip_registration_id;

    /** @var ShortAccountInfoType The current account state */
    public $account_info;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class UpdateSipRegistrationReturn
{
    /** @var number Returns 1 if the request has been completed successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class BindSipRegistrationReturn
{
    /** @var number Returns 1 if the request has been completed successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DeleteSipRegistrationReturn
{
    /** @var number Returns 1 if the request has been completed successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetSipRegistrationsReturn
{
    /** @var [SIPRegistrationType] Active SIP registrations */
    public $result;

    /** @var number Count rows */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
