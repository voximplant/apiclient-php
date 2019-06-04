<?php

namespace Voximplant\Resources\Params;

class SetAdminRoleInfoParams
{
	/** @var number The admin role to edit. */
	public $admin_role_id;

	/** @var string The admin role to edit, can be used instead of admin_role_id. */
	public $admin_role_name;

	/** @var string The new admin role name. The length must be less than 50. */
	public $new_admin_role_name;

	/** @var boolean The admin role enable flag. If false the allowed and denied entries have no affect. */
	public $admin_role_active;

	/** @var string The modification mode of the permission lists (allowed_entries and denied_entries). The following values are possible: add, del, set. */
	public $entry_modification_mode;

	/** @var stringlist The list of allowed access entry changes separated by the ';' symbol (the API function names). */
	public $allowed_entries;

	/** @var stringlist The list of denied access entry changes separated by the ';' symbol (the API function names). */
	public $denied_entries;

	/** @var intlist The admin role ID list separated by the ';' symbol or the 'all' value. The list specifies the roles from which the allowed_entries and denied_entries will be merged. */
	public $like_admin_role_id;

	/** @var stringlist The admin role name, can be used instead of like_admin_role_id. The name specifies a role from which the allowed_entries and denied_entries will be merged. */
	public $like_admin_role_name;
}
