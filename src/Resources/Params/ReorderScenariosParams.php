<?php

namespace Voximplant\Resources\Params;

class ReorderScenariosParams
{
	/** @var number The rule ID. */
	public $rule_id;

	/** @var string The rule name that can be used instead of rule_id. */
	public $rule_name;

	/** @var intlist The scenario ID list separated by the ';' symbol. */
	public $scenario_id;
}
