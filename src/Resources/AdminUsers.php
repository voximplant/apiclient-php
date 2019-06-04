<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddAdminUserReturn;
use Voximplant\Interfaces\AdminUsersInterface;
use Voximplant\Interfaces\AttachAdminRoleReturn;
use Voximplant\Interfaces\DelAdminUserReturn;
use Voximplant\Interfaces\GetAdminUsersReturn;
use Voximplant\Interfaces\SetAdminUserInfoReturn;

class AdminUsers implements AdminUsersInterface
{
	protected $client;

	/** @ objectAddAdminUser */
	protected $AddAdminUserReturn;

	/** @ objectDelAdminUser */
	protected $DelAdminUserReturn;

	/** @ objectSetAdminUserInfo */
	protected $SetAdminUserInfoReturn;

	/** @ objectGetAdminUsers */
	protected $GetAdminUsersReturn;

	/** @ objectAttachAdminRole */
	protected $AttachAdminRoleReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddAdminUserReturn = new AddAdminUserReturn();
		$this->DelAdminUserReturn = new DelAdminUserReturn();
		$this->SetAdminUserInfoReturn = new SetAdminUserInfoReturn();
		$this->GetAdminUsersReturn = new GetAdminUsersReturn();
		$this->AttachAdminRoleReturn = new AttachAdminRoleReturn();
	}


	/**
	 * @method Adds a new admin user into the specified parent or child account.
	 */
	public function AddAdminUser(Params\AddAdminUserParams $params = null): AddAdminUserReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddAdminUserReturn->$key = $value;
		}
		return $this->AddAdminUserReturn;
	}


	/**
	 * @method Deletes the specified admin user.
	 */
	public function DelAdminUser(Params\DelAdminUserParams $params = null): DelAdminUserReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelAdminUserReturn->$key = $value;
		}
		return $this->DelAdminUserReturn;
	}


	/**
	 * @method Edits the specified admin user.
	 */
	public function SetAdminUserInfo(Params\SetAdminUserInfoParams $params = null): SetAdminUserInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetAdminUserInfoReturn->$key = $value;
		}
		return $this->SetAdminUserInfoReturn;
	}


	/**
	 * @method Gets the admin users of the specified account. Note that both account types - parent and child - could have its own admins.
	 */
	public function GetAdminUsers(Params\GetAdminUsersParams $params = null): GetAdminUsersReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetAdminUsersReturn->$key = $value;
		}
		return $this->GetAdminUsersReturn;
	}


	/**
	 * @method Attaches the admin role(s) to the already existing admin(s).
	 */
	public function AttachAdminRole(Params\AttachAdminRoleParams $params = null): AttachAdminRoleReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AttachAdminRoleReturn->$key = $value;
		}
		return $this->AttachAdminRoleReturn;
	}
}
