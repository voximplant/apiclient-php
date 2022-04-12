<?php

namespace Voximplant\Resources\Params;

class SQ_AddSkillParams
{
    /** @var number ID of the application to bind to */
    public $application_id;

    /** @var string Name of the application to bind to. Can be used instead of application_id */
    public $application_name;

    /** @var string Unique skill name within the application */
    public $sq_skill_name;

    /** @var string Comment, up to 200 characters */
    public $description;
}
