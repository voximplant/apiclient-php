<?php

namespace Voximplant\Resources\Params;

class SQ_AddSkillParams
{
    /** @var number Application ID to bind to. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to bind to. Required unless application_id is provided. */
    public $application_name;

    /** @var string Unique skill name within the application */
    public $sq_skill_name;

    /** @var string Comment, up to 200 characters */
    public $description;
}
