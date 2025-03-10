<?php

namespace Voximplant\Resources\Params;

class SQ_BindSkillParams
{
    /** @var number ID of the application to search by */
    public $application_id;

    /** @var string Name of the application to search by. Can be used instead of application_id */
    public $application_name;

    /** @var intlist List of user IDs separated by semicolons (;). Use 'all' to select all the users */
    public $user_id;

    /** @var stringlist List of user names separated by semicolons (;). Can be used instead of user_id */
    public $user_name;

    /** @var Object Skills to be bound to agents in the json array format. The array should contain objects with the sq_skill_id/sq_skill_name and sq_skill_level keys where skill levels range from 1 to 5 */
    public $sq_skills;

    /** @var string Binding mode. Accepts one of the [SQSkillBindingModes] enum values */
    public $bind_mode;
}
