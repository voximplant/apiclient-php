<?php

namespace Voximplant\Resources\Params;

class BindPhoneNumberToApplicationParams
{
    /** @var intlist The phone ID list separated by semicolons (;). Use the 'all' value to select all phone ids. Required unless phone_number is provided. */
    public $phone_id;

    /** @var stringlist The phone number list separated by semicolons (;). Required unless phone_id is provided. */
    public $phone_number;

    /** @var number The application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string The application name. Required unless application_id is provided. */
    public $application_name;

    /** @var number The rule ID */
    public $rule_id;

    /** @var string The rule name that can be used instead of rule_id */
    public $rule_name;

    /** @var boolean Whether to bind or unbind (set true or false respectively) */
    public $bind;

    public function toArray()
    {
        return [
                'phone_id' => $this->phone_id,
                    'phone_number' => $this->phone_number,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'bind' => $this->bind !== null ? (filter_var($this->bind, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
