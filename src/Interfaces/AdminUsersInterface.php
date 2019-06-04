<?php

namespace Voximplant\Interfaces;

interface AdminUsersInterface
{
	/**
	 * @method Adds a new admin user into the specified parent or child account.
	 */
	public function AddAdminUser(\Voximplant\Resources\Params\AddAdminUserParams $params);


	/**
	 * @method Deletes the specified admin user.
	 */
	public function DelAdminUser(\Voximplant\Resources\Params\DelAdminUserParams $params);


	/**
	 * @method Edits the specified admin user.
	 */
	public function SetAdminUserInfo(\Voximplant\Resources\Params\SetAdminUserInfoParams $params);


	/**
	 * @method Gets the admin users of the specified account. Note that both account types - parent and child - could have its own admins.
	 */
	public function GetAdminUsers(\Voximplant\Resources\Params\GetAdminUsersParams $params);


	/**
	 * @method Attaches the admin role(s) to the already existing admin(s).
	 */
	public function AttachAdminRole(\Voximplant\Resources\Params\AttachAdminRoleParams $params);
}
class AddAdminUserReturn
{
	/** @var number 1 */
	public $result;

	/** @var number The new admin user ID. */
	public $admin_user_id;

	/** @var string The admin user API key. */
	public $admin_user_api_key;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DelAdminUserReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetAdminUserInfoReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetAdminUsersReturn
{
	/** @var [AdminUserType] */
	public $result;

	/** @var number The total found admin user count. */
	public $total_count;

	/** @var number The returned admin user count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class AttachAdminRoleReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
