<?php

namespace Voximplant\Resources\Params;

class SQ_SetSkillInfoParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var number ID of the skill. Required unless sq_skill_name is provided. */
    public $sq_skill_id;

    /** @var string Name of the skill. Required unless sq_skill_id is provided. */
    public $sq_skill_name;

    /** @var string New unique skill name within the application */
    public $new_sq_skill_name;

    /** @var string Comment, up to 200 characters */
    public $description;
}
