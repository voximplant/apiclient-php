<?php

namespace Voximplant\Resources\Params;

class SetSubUserRolesParams
{
	/** @var number The subuser's ID. */
	public $subuser_id;

	/** @var string The role id list separated by the ';' symbol. */
	public $role_id;

	/** @var string The role name list separated by the ';' symbol. */
	public $role_name;
}
