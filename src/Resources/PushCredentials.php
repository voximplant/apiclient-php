<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddPushCredentialReturn;
use Voximplant\Interfaces\BindPushCredentialReturn;
use Voximplant\Interfaces\DelPushCredentialReturn;
use Voximplant\Interfaces\GetPushCredentialReturn;
use Voximplant\Interfaces\PushCredentialsInterface;
use Voximplant\Interfaces\SetPushCredentialReturn;

class PushCredentials implements PushCredentialsInterface
{
	protected $client;

	/** @object AddPushCredential */
	protected $AddPushCredentialReturn;

	/** @object SetPushCredential */
	protected $SetPushCredentialReturn;

	/** @object DelPushCredential */
	protected $DelPushCredentialReturn;

	/** @object GetPushCredential */
	protected $GetPushCredentialReturn;

	/** @object BindPushCredential */
	protected $BindPushCredentialReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddPushCredentialReturn = new AddPushCredentialReturn();
		$this->SetPushCredentialReturn = new SetPushCredentialReturn();
		$this->DelPushCredentialReturn = new DelPushCredentialReturn();
		$this->GetPushCredentialReturn = new GetPushCredentialReturn();
		$this->BindPushCredentialReturn = new BindPushCredentialReturn();
	}


	/**
	 * @method Add push credentials
	 */
	public function AddPushCredential(Params\AddPushCredentialParams $params = null): AddPushCredentialReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddPushCredentialReturn->$key = $value;
		}
		return $this->AddPushCredentialReturn;
	}


	/**
	 * @method Modify push credentials
	 */
	public function SetPushCredential(Params\SetPushCredentialParams $params = null): SetPushCredentialReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetPushCredentialReturn->$key = $value;
		}
		return $this->SetPushCredentialReturn;
	}


	/**
	 * @method Remove push credentials
	 */
	public function DelPushCredential(Params\DelPushCredentialParams $params = null): DelPushCredentialReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelPushCredentialReturn->$key = $value;
		}
		return $this->DelPushCredentialReturn;
	}


	/**
	 * @method Get push credentials
	 */
	public function GetPushCredential(Params\GetPushCredentialParams $params = null): GetPushCredentialReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetPushCredentialReturn->$key = $value;
		}
		return $this->GetPushCredentialReturn;
	}


	/**
	 * @method Bind push credentials to applications
	 */
	public function BindPushCredential(Params\BindPushCredentialParams $params = null): BindPushCredentialReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->BindPushCredentialReturn->$key = $value;
		}
		return $this->BindPushCredentialReturn;
	}
}
