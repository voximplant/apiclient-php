<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddAdminRoleReturn;
use Voximplant\Interfaces\AdminRolesInterface;
use Voximplant\Interfaces\DelAdminRoleReturn;
use Voximplant\Interfaces\GetAdminRolesReturn;
use Voximplant\Interfaces\GetAvailableAdminRoleEntriesReturn;
use Voximplant\Interfaces\SetAdminRoleInfoReturn;

class AdminRoles implements AdminRolesInterface
{
	protected $client;

	/** @object AddAdminRole */
	protected $AddAdminRoleReturn;

	/** @object DelAdminRole */
	protected $DelAdminRoleReturn;

	/** @object SetAdminRoleInfo */
	protected $SetAdminRoleInfoReturn;

	/** @object GetAdminRoles */
	protected $GetAdminRolesReturn;

	/** @object GetAvailableAdminRoleEntries */
	protected $GetAvailableAdminRoleEntriesReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddAdminRoleReturn = new AddAdminRoleReturn();
		$this->DelAdminRoleReturn = new DelAdminRoleReturn();
		$this->SetAdminRoleInfoReturn = new SetAdminRoleInfoReturn();
		$this->GetAdminRolesReturn = new GetAdminRolesReturn();
		$this->GetAvailableAdminRoleEntriesReturn = new GetAvailableAdminRoleEntriesReturn();
	}


	/**
	 * @method Adds a new admin role.
	 */
	public function AddAdminRole(Params\AddAdminRoleParams $params = null): AddAdminRoleReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddAdminRoleReturn->$key = $value;
		}
		return $this->AddAdminRoleReturn;
	}


	/**
	 * @method Deletes the specified admin role.
	 */
	public function DelAdminRole(Params\DelAdminRoleParams $params = null): DelAdminRoleReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelAdminRoleReturn->$key = $value;
		}
		return $this->DelAdminRoleReturn;
	}


	/**
	 * @method Edits the specified admin role.
	 */
	public function SetAdminRoleInfo(Params\SetAdminRoleInfoParams $params = null): SetAdminRoleInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetAdminRoleInfoReturn->$key = $value;
		}
		return $this->SetAdminRoleInfoReturn;
	}


	/**
	 * @method Gets the admin roles.
	 */
	public function GetAdminRoles(Params\GetAdminRolesParams $params = null): GetAdminRolesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetAdminRolesReturn->$key = $value;
		}
		return $this->GetAdminRolesReturn;
	}


	/**
	 * @method Gets the all available admin role entries.
	 */
	public function GetAvailableAdminRoleEntries(Params\GetAvailableAdminRoleEntriesParams $params = null): GetAvailableAdminRoleEntriesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetAvailableAdminRoleEntriesReturn->$key = $value;
		}
		return $this->GetAvailableAdminRoleEntriesReturn;
	}
}
