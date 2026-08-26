<?php

namespace Voximplant\Resources\Params;

class GetQueuesParams
{
    /** @var number The ACD queue ID to filter */
    public $acd_queue_id;

    /** @var string The ACD queue name part to filter */
    public $acd_queue_name;

    /** @var number The application ID to filter. Can be used instead of the application_name parameter */
    public $application_id;

    /** @var string The application name. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var number The skill ID to filter. Can be used instead of the skill_name parameter */
    public $skill_id;

    /** @var string The skill name. Can be used instead of the skill_id parameter */
    public $skill_name;

    /** @var number The excluded skill ID to filter. Can be used instead of the excluded_skill_name parameter */
    public $excluded_skill_id;

    /** @var string The excluded skill name. Can be used instead of the excluded_skill_id parameter */
    public $excluded_skill_name;

    /** @var boolean Whether to get the bound skills */
    public $with_skills;

    /** @var number The skill to show in the 'skills' field output */
    public $showing_skill_id;

    /** @var number The maximum returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var boolean Whether to include the number of agents bound to the queue */
    public $with_operatorcount;

    /** @var boolean Whether to include the deleted queues */
    public $show_deleted;

    public function toArray()
    {
        return [
                'acd_queue_id' => $this->acd_queue_id,
                    'acd_queue_name' => $this->acd_queue_name,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'skill_id' => $this->skill_id,
                    'skill_name' => $this->skill_name,
                    'excluded_skill_id' => $this->excluded_skill_id,
                    'excluded_skill_name' => $this->excluded_skill_name,
                    'with_skills' => $this->with_skills !== null ? (filter_var($this->with_skills, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'showing_skill_id' => $this->showing_skill_id,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'with_operatorcount' => $this->with_operatorcount !== null ? (filter_var($this->with_operatorcount, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'show_deleted' => $this->show_deleted !== null ? (filter_var($this->show_deleted, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
