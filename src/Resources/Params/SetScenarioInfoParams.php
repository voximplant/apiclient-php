<?php

namespace Voximplant\Resources\Params;

class SetScenarioInfoParams
{
    /** @var number Scenario ID. Required unless required_scenario_name is provided. */
    public $scenario_id;

    /** @var string Name of the scenario to edit. Required unless scenario_id is provided. */
    public $required_scenario_name;

    /** @var string New scenario name. The length should be less than 30 */
    public $scenario_name;

    /** @var string New scenario text. Use the application/x-www-form-urlencoded content type with UTF-8 encoding. The length should be less than 128 KB */
    public $scenario_script;
}
