<?php

namespace Voximplant\Resources\Params;

class SetSkillInfoParams
{
    /** @var number The skill ID. Required unless skill_name is provided. */
    public $skill_id;

    /** @var string The skill name. Required unless skill_id is provided. */
    public $skill_name;

    /** @var string The new skill name. The length should be less than 512 */
    public $new_skill_name;
}
