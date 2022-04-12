<?php

namespace Voximplant\Resources\Params;

class BindSkillParams
{
    /** @var intlist The skill ID list separated by the ';' symbol. Use the 'all' value to select all skills */
    public $skill_id;

    /** @var stringlist The skill name list separated by the ';' symbol. Can be used instead of skill_id */
    public $skill_name;

    /** @var intlist The user ID list separated by the ';' symbol. Use the 'all' value to select all users */
    public $user_id;

    /** @var stringlist The user name list separated by the ';' symbol. user_name can be used instead of user_id */
    public $user_name;

    /** @var intlist The ACD queue ID list separated by the ';' symbol. Use the 'all' value to select all ACD queues */
    public $acd_queue_id;

    /** @var stringlist The ACD queue name that can be used instead of acd_queue_id. The ACD queue name list separated by the ';' symbol */
    public $acd_queue_name;

    /** @var number The application ID. It is required if the user_name is specified */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var boolean Bind or unbind (set true or false respectively) */
    public $bind;
}
