<?php

namespace Voximplant\Interfaces;

interface UsersInterface
{
	/**
	 * @method Adds a new user.
	 */
	public function AddUser(\Voximplant\Resources\Params\AddUserParams $params);


	/**
	 * @method Deletes the specified user(s).
	 */
	public function DelUser(\Voximplant\Resources\Params\DelUserParams $params);


	/**
	 * @method Edits the user.
	 */
	public function SetUserInfo(\Voximplant\Resources\Params\SetUserInfoParams $params);


	/**
	 * @method Shows the users of the specified account.
	 */
	public function GetUsers(\Voximplant\Resources\Params\GetUsersParams $params);
}
class AddUserReturn
{
	/** @var number 1 */
	public $result;

	/** @var number The new user ID. */
	public $user_id;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DelUserReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetUserInfoReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetUsersReturn
{
	/** @var [UserInfoType] The UserInfoType records. */
	public $result;

	/** @var number The total found user count. */
	public $total_count;

	/** @var number The returned user count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
