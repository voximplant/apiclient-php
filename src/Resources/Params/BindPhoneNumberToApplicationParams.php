<?php

namespace Voximplant\Resources\Params;

class BindPhoneNumberToApplicationParams
{
    /** @var intlist The phone ID list separated by the ';' symbol. Use the 'all' value to select all phone ids */
    public $phone_id;

    /** @var stringlist The phone number list separated by the ';' symbol that can be used instead of phone_id */
    public $phone_number;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var number The rule ID */
    public $rule_id;

    /** @var string The rule name that can be used instead of rule_id */
    public $rule_name;

    /** @var boolean Bind or unbind (set true or false respectively) */
    public $bind;
}
