<?php

namespace Voximplant\Resources\Params;

class BindSipRegistrationParams
{
    /** @var number The registration ID */
    public $sip_registration_id;

    /** @var number The application ID which the SIP registration will be bound to. Can be used instead of the application_name parameter */
    public $application_id;

    /** @var string The application name which the SIP registration will be bound to. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var number The rule ID which the SIP registration will be bound to. Can be used instead of the rule_name parameter */
    public $rule_id;

    /** @var string The rule name which the SIP registration will be bound to. Can be used instead of the rule_id parameter */
    public $rule_name;

    /** @var number The user ID which the SIP registration will be bound to. Can be used instead of the user_name parameter */
    public $user_id;

    /** @var string The user name which the SIP registration will be bound to. Can be used instead of the user_id parameter */
    public $user_name;

    /** @var boolean Bind or unbind (set true or false respectively) */
    public $bind;

    public function toArray()
    {
        return [
                'sip_registration_id' => $this->sip_registration_id,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'bind' => $this->bind !== null ? (filter_var($this->bind, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
