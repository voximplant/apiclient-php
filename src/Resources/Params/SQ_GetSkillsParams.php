<?php

namespace Voximplant\Resources\Params;

class SQ_GetSkillsParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of user IDs separated by semicolon (;) */
    public $user_id;

    /** @var stringlist List of user names separated by semicolon (;). Can be used instead of user_id */
    public $user_name;

    /** @var intlist List of skill IDs separated by semicolon (;) */
    public $sq_skill_id;

    /** @var stringlist List of skill names separated by semicolon (;). Can be used instead of sq_skill_id */
    public $sq_skill_name;

    /** @var string Substring of the skill name to filter, case-insensitive */
    public $sq_skill_name_template;

    /** @var number ID of the user that is not bound to the skill */
    public $excluded_user_id;

    /** @var string Name of the user that is not bound to the skill. Can be used instead of excluded_user_id */
    public $excluded_user_name;

    /** @var number Number of items to show in the output */
    public $count;

    /** @var number Number of items to skip in the output */
    public $offset;
}
