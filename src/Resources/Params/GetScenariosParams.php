<?php

namespace Voximplant\Resources\Params;

class GetScenariosParams
{
    /** @var number The scenario ID to filter */
    public $scenario_id;

    /** @var string The scenario name to filter. Can be used instead of scenario_id. All scenarios containing this param in their names are returned. The parameter is case insensitive */
    public $scenario_name;

    /** @var boolean Whether to get the scenario text. You must specify the 'scenario_id' too! */
    public $with_script;

    /** @var number The max returning record count */
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
