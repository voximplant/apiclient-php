<?php

namespace Voximplant\Resources\Params;

class AddScenarioParams
{
	/** @var string The scenario name. The length must be less than 30 */
	public $scenario_name;

	/** @var string The scenario text. The length must be less than 128 KB. */
	public $scenario_script;

	/** @var boolean Is the existing scenario rewrite? */
	public $rewrite;
}
