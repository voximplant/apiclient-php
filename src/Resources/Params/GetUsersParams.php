<?php

namespace Voximplant\Resources\Params;

class GetUsersParams
{
    /** @var number The application ID to filter */
    public $application_id;

    /** @var string The application name part to filter */
    public $application_name;

    /** @var number The skill ID to filter */
    public $skill_id;

    /** @var number The excluded skill ID to filter */
    public $excluded_skill_id;

    /** @var number The ACD queue ID to filter */
    public $acd_queue_id;

    /** @var number The excluded ACD queue ID to filter */
    public $excluded_acd_queue_id;

    /** @var number The user ID to filter */
    public $user_id;

    /** @var string The user name part to filter */
    public $user_name;

    /** @var boolean The user active flag to filter */
    public $user_active;

    /** @var string The user display name part to filter */
    public $user_display_name;

    /** @var boolean Set true to get the bound skills */
    public $with_skills;

    /** @var boolean Set true to get the bound queues */
    public $with_queues;

    /** @var stringlist The ACD status list separated by the ';' symbol to filter. The following values are possible: OFFLINE, ONLINE, READY, BANNED, IN_SERVICE, AFTER_SERVICE, TIMEOUT, DND */
    public $acd_status;

    /** @var number The skill to show in the 'skills' field output */
    public $showing_skill_id;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    /** @var string The following values are available: 'user_id', 'user_name' and 'user_display_name' */
    public $order_by;

    /** @var boolean Set true to get the user live balance */
    public $return_live_balance;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'skill_id' => $this->skill_id,
                    'excluded_skill_id' => $this->excluded_skill_id,
                    'acd_queue_id' => $this->acd_queue_id,
                    'excluded_acd_queue_id' => $this->excluded_acd_queue_id,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'user_active' => $this->user_active !== null ? (filter_var($this->user_active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'user_display_name' => $this->user_display_name,
                    'with_skills' => $this->with_skills !== null ? (filter_var($this->with_skills, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_queues' => $this->with_queues !== null ? (filter_var($this->with_queues, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'acd_status' => $this->acd_status,
                    'showing_skill_id' => $this->showing_skill_id,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'order_by' => $this->order_by,
                    'return_live_balance' => $this->return_live_balance !== null ? (filter_var($this->return_live_balance, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
