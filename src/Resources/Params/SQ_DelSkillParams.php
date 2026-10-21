<?php

namespace Voximplant\Resources\Params;

class SQ_DelSkillParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of skill IDs separated by semicolons (;). Use 'all' to delete all the skills. Required unless sq_skill_name is provided. */
    public $sq_skill_id;

    /** @var stringlist List of skill names separated by semicolons (;). Required unless sq_skill_id is provided. */
    public $sq_skill_name;
}
