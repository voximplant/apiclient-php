<?php

namespace Voximplant\Resources\Params;

class SQ_DelSkillParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of skill IDs separated by semicolon (;). Use 'all' to delete all the skills */
    public $sq_skill_id;

    /** @var stringlist List of skill names separated by semicolon (;). Can be used instead of sq_skill_id */
    public $sq_skill_name;
}
