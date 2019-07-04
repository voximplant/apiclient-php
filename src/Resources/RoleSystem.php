<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddSubUserReturn;
use Voximplant\Interfaces\CreateKeyReturn;
use Voximplant\Interfaces\DelSubUserReturn;
use Voximplant\Interfaces\DeleteKeyReturn;
use Voximplant\Interfaces\GetKeyRolesReturn;
use Voximplant\Interfaces\GetKeysReturn;
use Voximplant\Interfaces\GetRoleGroupsReturn;
use Voximplant\Interfaces\GetRolesReturn;
use Voximplant\Interfaces\GetSubUserRolesReturn;
use Voximplant\Interfaces\GetSubUsersReturn;
use Voximplant\Interfaces\RemoveKeyRolesReturn;
use Voximplant\Interfaces\RemoveSubUserRolesReturn;
use Voximplant\Interfaces\RoleSystemInterface;
use Voximplant\Interfaces\SetKeyRolesReturn;
use Voximplant\Interfaces\SetSubUserInfoReturn;
use Voximplant\Interfaces\SetSubUserRolesReturn;
use Voximplant\Interfaces\UpdateKeyReturn;

class RoleSystem implements RoleSystemInterface
{
	protected $client;

	/** @object CreateKey */
	protected $CreateKeyReturn;

	/** @object GetKeys */
	protected $GetKeysReturn;

	/** @object UpdateKey */
	protected $UpdateKeyReturn;

	/** @object DeleteKey */
	protected $DeleteKeyReturn;

	/** @object SetKeyRoles */
	protected $SetKeyRolesReturn;

	/** @object GetKeyRoles */
	protected $GetKeyRolesReturn;

	/** @object RemoveKeyRoles */
	protected $RemoveKeyRolesReturn;

	/** @object AddSubUser */
	protected $AddSubUserReturn;

	/** @object GetSubUsers */
	protected $GetSubUsersReturn;

	/** @object SetSubUserInfo */
	protected $SetSubUserInfoReturn;

	/** @object DelSubUser */
	protected $DelSubUserReturn;

	/** @object SetSubUserRoles */
	protected $SetSubUserRolesReturn;

	/** @object GetSubUserRoles */
	protected $GetSubUserRolesReturn;

	/** @object RemoveSubUserRoles */
	protected $RemoveSubUserRolesReturn;

	/** @object GetRoles */
	protected $GetRolesReturn;

	/** @object GetRoleGroups */
	protected $GetRoleGroupsReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->CreateKeyReturn = new CreateKeyReturn();
		$this->GetKeysReturn = new GetKeysReturn();
		$this->UpdateKeyReturn = new UpdateKeyReturn();
		$this->DeleteKeyReturn = new DeleteKeyReturn();
		$this->SetKeyRolesReturn = new SetKeyRolesReturn();
		$this->GetKeyRolesReturn = new GetKeyRolesReturn();
		$this->RemoveKeyRolesReturn = new RemoveKeyRolesReturn();
		$this->AddSubUserReturn = new AddSubUserReturn();
		$this->GetSubUsersReturn = new GetSubUsersReturn();
		$this->SetSubUserInfoReturn = new SetSubUserInfoReturn();
		$this->DelSubUserReturn = new DelSubUserReturn();
		$this->SetSubUserRolesReturn = new SetSubUserRolesReturn();
		$this->GetSubUserRolesReturn = new GetSubUserRolesReturn();
		$this->RemoveSubUserRolesReturn = new RemoveSubUserRolesReturn();
		$this->GetRolesReturn = new GetRolesReturn();
		$this->GetRoleGroupsReturn = new GetRoleGroupsReturn();
	}


	/**
	 * @method Creates a public/private key pair.
	 */
	public function CreateKey(Params\CreateKeyParams $params = null): CreateKeyReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->CreateKeyReturn->$key = $value;
		}
		return $this->CreateKeyReturn;
	}


	/**
	 * @method Gets key info of the specified account.
	 */
	public function GetKeys(Params\GetKeysParams $params = null): GetKeysReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetKeysReturn->$key = $value;
		}
		return $this->GetKeysReturn;
	}


	/**
	 * @method Updates info of the specified key.
	 */
	public function UpdateKey(Params\UpdateKeyParams $params = null): UpdateKeyReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->UpdateKeyReturn->$key = $value;
		}
		return $this->UpdateKeyReturn;
	}


	/**
	 * @method Deletes the specified key.
	 */
	public function DeleteKey(Params\DeleteKeyParams $params = null): DeleteKeyReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DeleteKeyReturn->$key = $value;
		}
		return $this->DeleteKeyReturn;
	}


	/**
	 * @method Set roles for the specified key.
	 */
	public function SetKeyRoles(Params\SetKeyRolesParams $params = null): SetKeyRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetKeyRolesReturn->$key = $value;
		}
		return $this->SetKeyRolesReturn;
	}


	/**
	 * @method Gets roles of the specified key.
	 */
	public function GetKeyRoles(Params\GetKeyRolesParams $params = null): GetKeyRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetKeyRolesReturn->$key = $value;
		}
		return $this->GetKeyRolesReturn;
	}


	/**
	 * @method Removes the specified roles of a key.
	 */
	public function RemoveKeyRoles(Params\RemoveKeyRolesParams $params = null): RemoveKeyRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->RemoveKeyRolesReturn->$key = $value;
		}
		return $this->RemoveKeyRolesReturn;
	}


	/**
	 * @method Creates a subuser.
	 */
	public function AddSubUser(Params\AddSubUserParams $params = null): AddSubUserReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddSubUserReturn->$key = $value;
		}
		return $this->AddSubUserReturn;
	}


	/**
	 * @method Gets subusers.
	 */
	public function GetSubUsers(Params\GetSubUsersParams $params = null): GetSubUsersReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetSubUsersReturn->$key = $value;
		}
		return $this->GetSubUsersReturn;
	}


	/**
	 * @method Edits a subuser.
	 */
	public function SetSubUserInfo(Params\SetSubUserInfoParams $params = null): SetSubUserInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetSubUserInfoReturn->$key = $value;
		}
		return $this->SetSubUserInfoReturn;
	}


	/**
	 * @method Deletes a subuser.
	 */
	public function DelSubUser(Params\DelSubUserParams $params = null): DelSubUserReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelSubUserReturn->$key = $value;
		}
		return $this->DelSubUserReturn;
	}


	/**
	 * @method Adds the specified roles for a subuser.
	 */
	public function SetSubUserRoles(Params\SetSubUserRolesParams $params = null): SetSubUserRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetSubUserRolesReturn->$key = $value;
		}
		return $this->SetSubUserRolesReturn;
	}


	/**
	 * @method Gets the subuser's roles.
	 */
	public function GetSubUserRoles(Params\GetSubUserRolesParams $params = null): GetSubUserRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetSubUserRolesReturn->$key = $value;
		}
		return $this->GetSubUserRolesReturn;
	}


	/**
	 * @method Removes the specified roles of a subuser.
	 */
	public function RemoveSubUserRoles(Params\RemoveSubUserRolesParams $params = null): RemoveSubUserRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->RemoveSubUserRolesReturn->$key = $value;
		}
		return $this->RemoveSubUserRolesReturn;
	}


	/**
	 * @method Gets all roles.
	 */
	public function GetRoles(Params\GetRolesParams $params = null): GetRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetRolesReturn->$key = $value;
		}
		return $this->GetRolesReturn;
	}


	/**
	 * @method Gets role groups
	 */
	public function GetRoleGroups(Params\GetRoleGroupsParams $params = null): GetRoleGroupsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetRoleGroupsReturn->$key = $value;
		}
		return $this->GetRoleGroupsReturn;
	}
}
