<?php

namespace Voximplant\Resources\Params;

class SQ_GetSkillsParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of user IDs separated by semicolons (;). Can be used instead of the user_name parameter */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of the user_id parameter */
    public $user_name;

    /** @var intlist List of skill IDs separated by semicolons (;). Can be used instead of the sq_skill_name parameter */
    public $sq_skill_id;

    /** @var stringlist List of skill names separated by semicolons (;). Can be used instead of the sq_skill_id parameter */
    public $sq_skill_name;

    /** @var string Substring of the skill name to filter, case-insensitive */
    public $sq_skill_name_template;

    /** @var intlist List of user IDs separated by semicolons (;). Skills bound to these users are excluded. Can be used instead of the excluded_user_name parameter */
    public $excluded_user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of the excluded_user_id parameter */
    public $excluded_user_name;

    /** @var number Number of items to show in the output */
    public $count;

    /** @var number Number of items to skip in the output */
    public $offset;
}
