<?php

namespace Voximplant\Resources\Params;

class RemoveKeyRolesParams
{
	/** @var string The key's ID. */
	public $key_id;

	/** @var intlist The role id list separated by the ';' symbol. */
	public $role_id;

	/** @var stringlist The role name list separated by the ';' symbol. */
	public $role_name;
}
