<?php

namespace Voximplant\Resources\Params;

class SetScenarioInfoParams
{
    /** @var number Scenario ID */
    public $scenario_id;

    /** @var string Name of the scenario to edit, can be used instead of scenario_id */
    public $required_scenario_name;

    /** @var string New scenario name. The length must be less than 30 */
    public $scenario_name;

    /** @var string New scenario text. Use the application/x-www-form-urlencoded content type with UTF-8 encoding. The length must be less than 128 KB */
    public $scenario_script;
}
