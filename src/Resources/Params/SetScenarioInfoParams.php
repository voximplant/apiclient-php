<?php

namespace Voximplant\Resources\Params;

class SetScenarioInfoParams
{
    /** @var number The scenario ID */
    public $scenario_id;

    /** @var string The name of the scenario to edit, can be used instead of scenario_id */
    public $required_scenario_name;

    /** @var string The new scenario name. The length must be less than 30 */
    public $scenario_name;

    /** @var string The new scenario text. The length must be less than 128 KB */
    public $scenario_script;
}
