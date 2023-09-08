<?php

namespace Voximplant\Interfaces;

interface SIPRegistrationInterface
{
    /**
     * @method Create a new SIP registration. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You should set is_persistent=true if you specify the user_id or user_name. You can bind only one SIP registration to the user (the previous SIP registration will be auto unbound).<br><br>Please note that when you create a SIP registration, we reserve the subscription fee and taxes for the upcoming month. Read more in the <a href='/docs/gettingstarted/billing'>Billing</a> page.
     */
    public function CreateSipRegistration(\Voximplant\Resources\Params\CreateSipRegistrationParams $params);

    /**
     * @method Update SIP registration. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You can bind only one SIP registration to the user (the previous SIP registration will be auto unbound).
     */
    public function UpdateSipRegistration(\Voximplant\Resources\Params\UpdateSipRegistrationParams $params);

    /**
     * @method Bind the SIP registration to the application/user or unbind the SIP registration from the application/user. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You should specify the sip_registration_id if you set bind=true. You can bind only one SIP registration to the user (the previous SIP registration will be auto unbound).
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
    /** @var number 1 */
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
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class BindSipRegistrationReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DeleteSipRegistrationReturn
{
    /** @var number 1 */
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
