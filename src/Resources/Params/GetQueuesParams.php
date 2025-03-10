<?php

namespace Voximplant\Resources\Params;

class GetQueuesParams
{
    /** @var number The ACD queue ID to filter */
    public $acd_queue_id;

    /** @var string The ACD queue name part to filter */
    public $acd_queue_name;

    /** @var number The application ID to filter */
    public $application_id;

    /** @var number The skill ID to filter */
    public $skill_id;

    /** @var number The excluded skill ID to filter */
    public $excluded_skill_id;

    /** @var boolean Whether to get the bound skills */
    public $with_skills;

    /** @var number The skill to show in the 'skills' field output */
    public $showing_skill_id;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var boolean Whether to include the number of agents bound to the queue */
    public $with_operatorcount;

    public function toArray()
    {
        return [
                'acd_queue_id' => $this->acd_queue_id,
                    'acd_queue_name' => $this->acd_queue_name,
                    'application_id' => $this->application_id,
                    'skill_id' => $this->skill_id,
                    'excluded_skill_id' => $this->excluded_skill_id,
                    'with_skills' => $this->with_skills !== null ? (filter_var($this->with_skills, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'showing_skill_id' => $this->showing_skill_id,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'with_operatorcount' => $this->with_operatorcount !== null ? (filter_var($this->with_operatorcount, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
