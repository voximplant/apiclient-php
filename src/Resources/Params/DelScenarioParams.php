<?php

namespace Voximplant\Resources\Params;

class DelScenarioParams
{
    /** @var intlist The scenario ID list separated by the ';' symbol. Use the 'all' value to select all scenarios */
    public $scenario_id;

    /** @var stringlist The scenario name list separated by the ';' symbol. Can be used instead of scenario_id */
    public $scenario_name;
}
