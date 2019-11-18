<?php

namespace Voximplant\Resources\Params;

class BindSipRegistrationParams
{
    /** @var number The registration ID */
    public $sip_registration_id;

    /** @var number The application ID which the SIP registration will be bound to. Could be used instead of the application_name parameter. */
    public $application_id;

    /** @var string The application name which the SIP registration will be bound to. Could be used instead of the application_id parameter. */
    public $application_name;

    /** @var number The rule ID which the SIP registration will be bound to. Could be used instead of the rule_name parameter. */
    public $rule_id;

    /** @var string The rule name which the SIP registration will be bound to. Could be used instead of the rule_id parameter. */
    public $rule_name;

    /** @var number The user ID which the SIP registration will be bound to. Could be used instead of the user_name parameter. */
    public $user_id;

    /** @var string The user name which the SIP registration will be bound to. Could be used instead of the user_id parameter. */
    public $user_name;

    /** @var boolean Bind or unbind? */
    public $bind;
}
