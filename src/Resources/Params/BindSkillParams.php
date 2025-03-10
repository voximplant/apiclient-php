<?php

namespace Voximplant\Resources\Params;

class BindSkillParams
{
    /** @var intlist The skill ID list separated by semicolons (;). Use the 'all' value to select all skills */
    public $skill_id;

    /** @var stringlist The skill name list separated by semicolons (;). Can be used instead of skill_id */
    public $skill_name;

    /** @var intlist The user ID list separated by semicolons (;). Use the 'all' value to select all users */
    public $user_id;

    /** @var stringlist The user name list separated by semicolons (;). user_name can be used instead of user_id */
    public $user_name;

    /** @var intlist The ACD queue ID list separated by semicolons (;). Use the 'all' value to select all ACD queues */
    public $acd_queue_id;

    /** @var stringlist The ACD queue name that can be used instead of acd_queue_id. The ACD queue name list separated by semicolons (;) */
    public $acd_queue_name;

    /** @var number The application ID. It is required if the user_name is specified */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var boolean Whether to bind or unbind (set true or false respectively) */
    public $bind;

    public function toArray()
    {
        return [
                'skill_id' => $this->skill_id,
                    'skill_name' => $this->skill_name,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'acd_queue_id' => $this->acd_queue_id,
                    'acd_queue_name' => $this->acd_queue_name,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'bind' => $this->bind !== null ? (filter_var($this->bind, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
