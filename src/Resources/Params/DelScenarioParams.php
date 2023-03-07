<?php

namespace Voximplant\Resources\Params;

class DelScenarioParams
{
    /** @var intlist The scenario ID list separated by semicolon (;). Use the 'all' value to delete all scenarios in all applications */
    public $scenario_id;

    /** @var stringlist The scenario name list separated by semicolon (;). Can be used instead of scenario_id */
    public $scenario_name;
}
