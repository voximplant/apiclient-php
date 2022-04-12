<?php

namespace Voximplant\Resources\Params;

class AddScenarioParams
{
    /** @var string The scenario name. The length must be less than 30 */
    public $scenario_name;

    /** @var string The scenario text. The length must be less than 128 KB */
    public $scenario_script;

    /** @var number The rule ID */
    public $rule_id;

    /** @var string The rule name that can be used instead of rule_id */
    public $rule_name;

    /** @var boolean Rewrite the existing scenario */
    public $rewrite;
}
