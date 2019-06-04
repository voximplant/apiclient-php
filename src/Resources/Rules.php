<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddRuleReturn;
use Voximplant\Interfaces\DelRuleReturn;
use Voximplant\Interfaces\GetRulesReturn;
use Voximplant\Interfaces\ReorderRulesReturn;
use Voximplant\Interfaces\RulesInterface;
use Voximplant\Interfaces\SetRuleInfoReturn;

class Rules implements RulesInterface
{
	protected $client;

	/** @ objectAddRule */
	protected $AddRuleReturn;

	/** @ objectDelRule */
	protected $DelRuleReturn;

	/** @ objectSetRuleInfo */
	protected $SetRuleInfoReturn;

	/** @ objectGetRules */
	protected $GetRulesReturn;

	/** @ objectReorderRules */
	protected $ReorderRulesReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->AddRuleReturn = new AddRuleReturn();
		$this->DelRuleReturn = new DelRuleReturn();
		$this->SetRuleInfoReturn = new SetRuleInfoReturn();
		$this->GetRulesReturn = new GetRulesReturn();
		$this->ReorderRulesReturn = new ReorderRulesReturn();
	}


	/**
	 * @method Adds a new rule for the application.
	 */
	public function AddRule(Params\AddRuleParams $params = null): AddRuleReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->AddRuleReturn->$key = $value;
		}
		return $this->AddRuleReturn;
	}


	/**
	 * @method Deletes the rule.
	 */
	public function DelRule(Params\DelRuleParams $params = null): DelRuleReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DelRuleReturn->$key = $value;
		}
		return $this->DelRuleReturn;
	}


	/**
	 * @method Edits the rule.
	 */
	public function SetRuleInfo(Params\SetRuleInfoParams $params = null): SetRuleInfoReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->SetRuleInfoReturn->$key = $value;
		}
		return $this->SetRuleInfoReturn;
	}


	/**
	 * @method Gets the rules.
	 */
	public function GetRules(Params\GetRulesParams $params = null): GetRulesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->GetRulesReturn->$key = $value;
		}
		return $this->GetRulesReturn;
	}


	/**
	 * @method Configures the rules' order in the Applications section of Control panel. Note: the rules must belong to the same application!
	 */
	public function ReorderRules(Params\ReorderRulesParams $params = null): ReorderRulesReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->ReorderRulesReturn->$key = $value;
		}
		return $this->ReorderRulesReturn;
	}
}
