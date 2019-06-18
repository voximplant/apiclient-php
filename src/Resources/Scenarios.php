<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddScenarioReturn;
use Voximplant\Interfaces\BindScenarioReturn;
use Voximplant\Interfaces\DelScenarioReturn;
use Voximplant\Interfaces\GetScenariosReturn;
use Voximplant\Interfaces\ReorderScenariosReturn;
use Voximplant\Interfaces\ScenariosInterface;
use Voximplant\Interfaces\SetScenarioInfoReturn;
use Voximplant\Interfaces\StartConferenceReturn;
use Voximplant\Interfaces\StartScenariosReturn;

class Scenarios implements ScenariosInterface
{
	protected $client;

	/** @object AddScenario */
	protected $AddScenarioReturn;

	/** @object DelScenario */
	protected $DelScenarioReturn;

	/** @object BindScenario */
	protected $BindScenarioReturn;

	/** @object GetScenarios */
	protected $GetScenariosReturn;

	/** @object SetScenarioInfo */
	protected $SetScenarioInfoReturn;

	/** @object ReorderScenarios */
	protected $ReorderScenariosReturn;

	/** @object StartScenarios */
	protected $StartScenariosReturn;

	/** @object StartConference */
	protected $StartConferenceReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddScenarioReturn = new AddScenarioReturn();
		$this->DelScenarioReturn = new DelScenarioReturn();
		$this->BindScenarioReturn = new BindScenarioReturn();
		$this->GetScenariosReturn = new GetScenariosReturn();
		$this->SetScenarioInfoReturn = new SetScenarioInfoReturn();
		$this->ReorderScenariosReturn = new ReorderScenariosReturn();
		$this->StartScenariosReturn = new StartScenariosReturn();
		$this->StartConferenceReturn = new StartConferenceReturn();
	}


	/**
	 * @method Adds a new scenario. Please use the POST method.
	 */
	public function AddScenario(Params\AddScenarioParams $params = null): AddScenarioReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddScenarioReturn->$key = $value;
		}
		return $this->AddScenarioReturn;
	}


	/**
	 * @method Deletes the scenario.
	 */
	public function DelScenario(Params\DelScenarioParams $params = null): DelScenarioReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelScenarioReturn->$key = $value;
		}
		return $this->DelScenarioReturn;
	}


	/**
	 * @method Bind the scenario list to the rule. You should specify the application_id or application_name if you specify the rule_name.
	 */
	public function BindScenario(Params\BindScenarioParams $params = null): BindScenarioReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->BindScenarioReturn->$key = $value;
		}
		return $this->BindScenarioReturn;
	}


	/**
	 * @method Gets the account's scenarios.
	 */
	public function GetScenarios(Params\GetScenariosParams $params = null): GetScenariosReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetScenariosReturn->$key = $value;
		}
		return $this->GetScenariosReturn;
	}


	/**
	 * @method Edits the scenario. Please use the POST method.
	 */
	public function SetScenarioInfo(Params\SetScenarioInfoParams $params = null): SetScenarioInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetScenarioInfoReturn->$key = $value;
		}
		return $this->SetScenarioInfoReturn;
	}


	/**
	 * @method Configures the order of the rules that are assigned to the specified rule.
	 */
	public function ReorderScenarios(Params\ReorderScenariosParams $params = null): ReorderScenariosReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->ReorderScenariosReturn->$key = $value;
		}
		return $this->ReorderScenariosReturn;
	}


	/**
	 * @method Run the JavaScript scenarios on a VoxImplant server. The scenarios run in a new media session.
	 */
	public function StartScenarios(Params\StartScenariosParams $params = null): StartScenariosReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->StartScenariosReturn->$key = $value;
		}
		return $this->StartScenariosReturn;
	}


	/**
	 * @method Start a new conference or join the conference.
	 */
	public function StartConference(Params\StartConferenceParams $params = null): StartConferenceReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->StartConferenceReturn->$key = $value;
		}
		return $this->StartConferenceReturn;
	}
}
