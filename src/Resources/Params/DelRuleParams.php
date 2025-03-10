<?php

namespace Voximplant\Resources\Params;

class DelRuleParams
{
    /** @var intlist The rule ID list separated by semicolons (;). Use the 'all' value to select all rules */
    public $rule_id;

    /** @var stringlist The rule name list separated by semicolons (;). Can be used instead of rule_id */
    public $rule_name;

    /** @var intlist The application ID list separated by semicolons (;). Use the 'all' value to select all applications */
    public $application_id;

    /** @var stringlist The application name list separated by semicolons (;). Can be used instead of application_id */
    public $application_name;
}
