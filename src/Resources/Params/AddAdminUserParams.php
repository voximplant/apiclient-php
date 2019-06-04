<?php

namespace Voximplant\Resources\Params;

class AddAdminUserParams
{
	/** @var string The admin user name. The length must be less than 50. */
	public $new_admin_user_name;

	/** @var string The admin user display name. The length must be less than 256. */
	public $admin_user_display_name;

	/** @var string The admin user password. The length must be at least 6 symbols. */
	public $new_admin_user_password;

	/** @var boolean The admin user enable flag. */
	public $admin_user_active;

	/** @var string The role(s) ID created via Managing Admin Roles methods. The attaching admin role ID list separated by the ';' symbol or the 'all' value. */
	public $admin_role_id;

	/** @var stringlist The role(s) name(s) created via Managing Admin Roles methods. The attaching admin role name that can be used instead of admin_role_id. */
	public $admin_role_name;
}
