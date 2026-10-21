<?php

namespace Voximplant\Resources\Params;

class GetScenariosParams
{
    /** @var number The scenario ID to filter */
    public $scenario_id;

    /** @var string The scenario name to filter. Exact match. Combines with scenario_id when both are passed. Use with application_id or application_name to limit the result to one application */
    public $scenario_name;

    /** @var boolean Whether to get the scenario text. You should specify the 'scenario_id' too! */
    public $with_script;

    /** @var number The maximum returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var number ID of the scenario's application */
    public $application_id;

    /** @var string Name of the scenario's application */
    public $application_name;

    public function toArray()
    {
        return [
                'scenario_id' => $this->scenario_id,
                    'scenario_name' => $this->scenario_name,
                    'with_script' => $this->with_script !== null ? (filter_var($this->with_script, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
            ];
    }
}
