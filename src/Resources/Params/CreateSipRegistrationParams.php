<?php

namespace Voximplant\Resources\Params;

class CreateSipRegistrationParams
{
    /** @var string The user name */
    public $sip_username;

    /** @var string The SIP proxy */
    public $proxy;

    /** @var string The SIP authentications user */
    public $auth_user;

    /** @var string The outgoing SIP proxy */
    public $outbound_proxy;

    /** @var string The SIP password */
    public $password;

    /** @var boolean Whether SIP registration is persistent. Set false to activate it only on the user login */
    public $is_persistent;

    /** @var number The application ID which a new SIP registration is to be bound to. Can be used instead of the application_name parameter */
    public $application_id;

    /** @var string The application name which a new SIP registration is to be bound to. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var number The rule ID which a new SIP registration is to be bound to. Can be used instead of the rule_name parameter */
    public $rule_id;

    /** @var string The rule name which a new SIP registration is to be bound to. Can be used instead of the rule_id parameter */
    public $rule_name;

    /** @var number The user ID which a new SIP registration is to be bound to. Can be used instead of the user_name parameter */
    public $user_id;

    /** @var string The user name which a new SIP registration is to be bound to. Can be used instead of the user_id parameter */
    public $user_name;

    public function toArray()
    {
        return [
                'sip_username' => $this->sip_username,
                    'proxy' => $this->proxy,
                    'auth_user' => $this->auth_user,
                    'outbound_proxy' => $this->outbound_proxy,
                    'password' => $this->password,
                    'is_persistent' => $this->is_persistent !== null ? (filter_var($this->is_persistent, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
            ];
    }
}
