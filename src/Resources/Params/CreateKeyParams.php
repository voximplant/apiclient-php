<?php

namespace Voximplant\Resources\Params;

class CreateKeyParams
{
	/** @var string The key's description. */
	public $description;

	/** @var string The role ID list separated by the ';' symbol. Use it instead of **role_name**, but not combine with. */
	public $role_id;

	/** @var string The role name list separated by the ';' symbol. Use it instead of **role_id**, but not combine with. */
	public $role_name;
}
