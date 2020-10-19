<?php

namespace Voximplant\Resources\Params;

class DelRuleParams
{
    /** @var intlist The rule ID list separated by the ';' symbol or the 'all' value. */
    public $rule_id;

    /** @var stringlist The rule name list separated by the ';' symbol. Can be used instead of rule_id. */
    public $rule_name;

    /** @var intlist The application ID list separated by the ';' symbol or the 'all' value. */
    public $application_id;

    /** @var stringlist The application name list separated by the ';' symbol. Can be used instead of application_id. */
    public $application_name;
}
