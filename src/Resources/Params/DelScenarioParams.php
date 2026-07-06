<?php

namespace Voximplant\Resources\Params;

class DelScenarioParams
{
    /** @var intlist The scenario ID list separated by semicolons (;). Use the 'all' value to delete all scenarios in all applications. Required unless scenario_name is provided. */
    public $scenario_id;

    /** @var stringlist The scenario name list separated by semicolons (;). Required unless scenario_id is provided. */
    public $scenario_name;
}
