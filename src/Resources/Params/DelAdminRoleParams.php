<?php

namespace Voximplant\Resources\Params;

class DelAdminRoleParams
{
	/** @var intlist The admin role ID list separated by the ';' symbol or the 'all' value. */
	public $admin_role_id;

	/** @var stringlist The admin role name to delete, can be used instead of admin_role_id. */
	public $admin_role_name;
}
