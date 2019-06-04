<?php

namespace Voximplant\Resources\Params;

class SetSkillInfoParams
{
	/** @var number The skill ID. */
	public $skill_id;

	/** @var string The skill name that can be used instead of skill_id. */
	public $skill_name;

	/** @var string The new skill name. The length must be less than 512. */
	public $new_skill_name;
}
