<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\BindSipRegistrationReturn;
use Voximplant\Interfaces\CreateSipRegistrationReturn;
use Voximplant\Interfaces\DeleteSipRegistrationReturn;
use Voximplant\Interfaces\GetSipRegistrationsReturn;
use Voximplant\Interfaces\SIPRegistrationInterface;
use Voximplant\Interfaces\UpdateSipRegistrationReturn;

class SIPRegistration implements SIPRegistrationInterface
{
    protected $client;

    /** @object CreateSipRegistration */
    protected $CreateSipRegistrationReturn;

    /** @object UpdateSipRegistration */
    protected $UpdateSipRegistrationReturn;

    /** @object BindSipRegistration */
    protected $BindSipRegistrationReturn;

    /** @object DeleteSipRegistration */
    protected $DeleteSipRegistrationReturn;

    /** @object GetSipRegistrations */
    protected $GetSipRegistrationsReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->CreateSipRegistrationReturn = new CreateSipRegistrationReturn();
        $this->UpdateSipRegistrationReturn = new UpdateSipRegistrationReturn();
        $this->BindSipRegistrationReturn = new BindSipRegistrationReturn();
        $this->DeleteSipRegistrationReturn = new DeleteSipRegistrationReturn();
        $this->GetSipRegistrationsReturn = new GetSipRegistrationsReturn();
    }

    /**
     * @method Creates a new SIP registration (the platform registers as a user on a 3rd party SIP server).There are two modes of SIP registration:Persistent registration, when the platform registers on a 3rd party SIP server as a user and the registration lasts until deleted (or there are network/technical issues with it — see the corresponding callback)Non-persistent registration (set `is_persistent` to false) which is initiated only when the specificed user (with `user_id` or `user_name`) logs in via one of Voximplant SDKs. As soon the user logs off, the registration goes offline. This mode helps to implement SIP softphone-like apps using Voximplant’s SDKs.Please note that when you create a SIP registration, we reserve the subscription fee and taxes for the upcoming month. Read more in the Billing page.
     */
    public function CreateSipRegistration(Params\CreateSipRegistrationParams $params = null): CreateSipRegistrationReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->CreateSipRegistrationReturn->$key = $value;
        }
        return $this->CreateSipRegistrationReturn;
    }

    /**
     * @method Update SIP registration. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You can bind only one SIP registration to the user (the previous SIP registration is automatically unbound).
     */
    public function UpdateSipRegistration(Params\UpdateSipRegistrationParams $params = null): UpdateSipRegistrationReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->UpdateSipRegistrationReturn->$key = $value;
        }
        return $this->UpdateSipRegistrationReturn;
    }

    /**
     * @method Bind the SIP registration to the application/user or unbind the SIP registration from the application/user. You should specify the application_id or application_name if you specify the rule_name or user_id, or user_name. You should specify the sip_registration_id if you set bind=true. You can bind only one SIP registration to the user (the previous SIP registration is automatically unbound).
     */
    public function BindSipRegistration(Params\BindSipRegistrationParams $params = null): BindSipRegistrationReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->BindSipRegistrationReturn->$key = $value;
        }
        return $this->BindSipRegistrationReturn;
    }

    /**
     * @method Delete SIP registration.
     */
    public function DeleteSipRegistration(Params\DeleteSipRegistrationParams $params = null): DeleteSipRegistrationReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DeleteSipRegistrationReturn->$key = $value;
        }
        return $this->DeleteSipRegistrationReturn;
    }

    /**
     * @method Get active SIP registrations.
     */
    public function GetSipRegistrations(Params\GetSipRegistrationsParams $params = null): GetSipRegistrationsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSipRegistrationsReturn->$key = $value;
        }
        return $this->GetSipRegistrationsReturn;
    }
}
