<?php

namespace Voximplant\Resources\Params;

class SQ_UnbindSkillParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of user IDs separated by semicolons (;). Use 'all' to select all the users. Required unless user_name is provided. */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Required unless user_id is provided. */
    public $user_name;

    /** @var intlist List of skill IDs separated by semicolons (;). Use 'all' to unbind all the skills. Required unless sq_skill_name is provided. */
    public $sq_skill_id;

    /** @var stringlist List of skill names separated by semicolons (;). Required unless sq_skill_id is provided. */
    public $sq_skill_name;
}
