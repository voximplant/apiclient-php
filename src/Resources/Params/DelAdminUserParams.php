<?php

namespace Voximplant\Resources\Params;

class DelAdminUserParams
{
	/** @var intlist The admin user ID list separated by the ';' symbol or the 'all' value. */
	public $required_admin_user_id;

	/** @var stringlist The admin user name to delete, can be used instead of required_admin_user_id. */
	public $required_admin_user_name;
}
