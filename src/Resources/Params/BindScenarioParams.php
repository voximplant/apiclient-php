<?php

namespace Voximplant\Resources\Params;

class BindScenarioParams
{
    /** @var intlist The scenario ID list separated by semicolons (;). Required unless scenario_name is provided. */
    public $scenario_id;

    /** @var stringlist The scenario name list separated by semicolons (;). Required unless scenario_id is provided. */
    public $scenario_name;

    /** @var number The rule ID to bind the scenario. The rule and the scenario need to be in the same application. Required unless rule_name is provided. */
    public $rule_id;

    /** @var string The rule name. Required unless rule_id is provided. */
    public $rule_name;

    /** @var number The application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string The application name. Required unless application_id is provided. */
    public $application_name;

    /** @var boolean Whether to bind or unbind (set true or false respectively) */
    public $bind;

    public function toArray()
    {
        return [
                'scenario_id' => $this->scenario_id,
                    'scenario_name' => $this->scenario_name,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'bind' => $this->bind !== null ? (filter_var($this->bind, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
