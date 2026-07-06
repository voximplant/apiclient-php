<?php

namespace Voximplant\Resources\Params;

class DelRuleParams
{
    /** @var intlist The rule ID list separated by semicolons (;). Use the 'all' value to select all rules. Required unless rule_name is provided. */
    public $rule_id;

    /** @var stringlist The rule name list separated by semicolons (;). Required unless rule_id is provided. */
    public $rule_name;

    /** @var intlist The application ID list separated by semicolons (;). Use the 'all' value to select all applications. Required unless application_name is provided. */
    public $application_id;

    /** @var stringlist The application name list separated by semicolons (;). Required unless application_id is provided. */
    public $application_name;
}
