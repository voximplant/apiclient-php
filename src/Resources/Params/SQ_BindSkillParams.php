<?php

namespace Voximplant\Resources\Params;

class SQ_BindSkillParams
{
    /** @var number Application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist List of user IDs separated by semicolons (;). Use 'all' to select all the users. Required unless user_name is provided. */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Required unless user_id is provided. */
    public $user_name;

    /** @var string Skills to be bound to agents in the JSON array format. The array should contain objects with the sq_skill_id/sq_skill_name and sq_skill_level keys where skill levels range from 1 to 5 */
    public $sq_skills;

    /** @var string Binding mode. Accepts one of the [SQSkillBindingModes] enum values */
    public $bind_mode;
}
