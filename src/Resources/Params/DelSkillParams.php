<?php

namespace Voximplant\Resources\Params;

class DelSkillParams
{
    /** @var number The skill ID. Required unless skill_name is provided. */
    public $skill_id;

    /** @var string The skill name. Required unless skill_id is provided. */
    public $skill_name;
}
