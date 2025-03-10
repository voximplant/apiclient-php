<?php

namespace Voximplant\Resources\Params;

class AddScenarioParams
{
    /** @var string The scenario name. The length must be less than 30 */
    public $scenario_name;

    /** @var string The scenario text. Use the application/x-www-form-urlencoded content type with UTF-8 encoding. The length must be less than 128 KB */
    public $scenario_script;

    /** @var number The rule ID. The new scenario binds to the specified rule. Please note, if you do not bind the scenario to any rule, you cannot execute the scenario */
    public $rule_id;

    /** @var string The rule name that can be used instead of rule_id */
    public $rule_name;

    /** @var boolean Whether to rewrite the existing scenario */
    public $rewrite;

    /** @var number ID of the application to bind the scenario to */
    public $application_id;

    /** @var string Name of the application to bind the scenario to */
    public $application_name;

    public function toArray()
    {
        return [
                'scenario_name' => $this->scenario_name,
                    'scenario_script' => $this->scenario_script,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'rewrite' => $this->rewrite !== null ? (filter_var($this->rewrite, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
            ];
    }
}
