<?php

namespace Voximplant\Resources\Params;

class GetApplicationsParams
{
    /** @var number The application ID to filter */
    public $application_id;

    /** @var string The application name part to filter */
    public $application_name;

    /** @var boolean Set true to get bound rules info */
    public $with_rules;

    /** @var boolean Set true to get bound rules and scenarios info */
    public $with_scenarios;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'with_rules' => $this->with_rules !== null ? (filter_var($this->with_rules, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_scenarios' => $this->with_scenarios !== null ? (filter_var($this->with_scenarios, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
