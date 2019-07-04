<?php

namespace Voximplant\Resources\Params;

class RemoveKeyRolesParams
{
	/** @var string The key's ID. */
	public $key_id;

	/** @var string The role id list separated by the ';' symbol. */
	public $role_id;

	/** @var string The role name list separated by the ';' symbol. */
	public $role_name;
}
