<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddAuthorizedAccountIPReturn;
use Voximplant\Interfaces\AuthorizedIPsInterface;
use Voximplant\Interfaces\CheckAuthorizedAccountIPReturn;
use Voximplant\Interfaces\DelAuthorizedAccountIPReturn;
use Voximplant\Interfaces\GetAuthorizedAccountIPsReturn;

class AuthorizedIPs implements AuthorizedIPsInterface
{
	protected $client;

	/** @object AddAuthorizedAccountIP */
	protected $AddAuthorizedAccountIPReturn;

	/** @object DelAuthorizedAccountIP */
	protected $DelAuthorizedAccountIPReturn;

	/** @object GetAuthorizedAccountIPs */
	protected $GetAuthorizedAccountIPsReturn;

	/** @object CheckAuthorizedAccountIP */
	protected $CheckAuthorizedAccountIPReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddAuthorizedAccountIPReturn = new AddAuthorizedAccountIPReturn();
		$this->DelAuthorizedAccountIPReturn = new DelAuthorizedAccountIPReturn();
		$this->GetAuthorizedAccountIPsReturn = new GetAuthorizedAccountIPsReturn();
		$this->CheckAuthorizedAccountIPReturn = new CheckAuthorizedAccountIPReturn();
	}


	/**
	 * @method Adds a new authorized IP4 or network to the white/black list.
	 */
	public function AddAuthorizedAccountIP(Params\AddAuthorizedAccountIPParams $params = null): AddAuthorizedAccountIPReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddAuthorizedAccountIPReturn->$key = $value;
		}
		return $this->AddAuthorizedAccountIPReturn;
	}


	/**
	 * @method Removes the authorized IP4 or network from the white/black list.
	 */
	public function DelAuthorizedAccountIP(Params\DelAuthorizedAccountIPParams $params = null): DelAuthorizedAccountIPReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelAuthorizedAccountIPReturn->$key = $value;
		}
		return $this->DelAuthorizedAccountIPReturn;
	}


	/**
	 * @method Gets the authorized IP4 or network.
	 */
	public function GetAuthorizedAccountIPs(Params\GetAuthorizedAccountIPsParams $params = null): GetAuthorizedAccountIPsReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetAuthorizedAccountIPsReturn->$key = $value;
		}
		return $this->GetAuthorizedAccountIPsReturn;
	}


	/**
	 * @method Tests whether the IP4 is banned or allowed.
	 */
	public function CheckAuthorizedAccountIP(Params\CheckAuthorizedAccountIPParams $params = null): CheckAuthorizedAccountIPReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->CheckAuthorizedAccountIPReturn->$key = $value;
		}
		return $this->CheckAuthorizedAccountIPReturn;
	}
}
