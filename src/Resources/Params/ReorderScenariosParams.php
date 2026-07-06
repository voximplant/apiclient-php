<?php

namespace Voximplant\Resources\Params;

class ReorderScenariosParams
{
    /** @var number The rule ID. Required unless rule_name is provided. */
    public $rule_id;

    /** @var string The rule name. Required unless rule_id is provided. */
    public $rule_name;

    /** @var intlist The scenario ID list separated by semicolons (;) */
    public $scenario_id;
}
