<?php

namespace Voximplant\Resources\Params;

class SQ_SetSkillInfoParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var number ID of the skill */
    public $sq_skill_id;

    /** @var string Name of the skill. Can be used instead of sq_skill_id */
    public $sq_skill_name;

    /** @var string New unique skill name within the application */
    public $new_sq_skill_name;

    /** @var string Comment, up to 200 characters */
    public $description;
}
