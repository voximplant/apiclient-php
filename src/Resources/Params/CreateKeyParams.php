<?php

namespace Voximplant\Resources\Params;

class CreateKeyParams
{
	/** @var string The key's description. */
	public $description;

	/** @var string The role id list separated by the ';' symbol. */
	public $role_id;

	/** @var string The role name list separated by the ';' symbol. */
	public $role_name;
}
