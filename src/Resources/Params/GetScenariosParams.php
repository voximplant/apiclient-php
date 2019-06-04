<?php

namespace Voximplant\Resources\Params;

class GetScenariosParams
{
	/** @var number The scenario ID to filter */
	public $scenario_id;

	/** @var string The scenario name to filter. Can be used instead of scenario_id. All scenarios containing this param in their names will be returned. The parameter is case insensitive. */
	public $scenario_name;

	/** @var boolean Set true to get the scenario text. You must specify the 'scenario_id' too! */
	public $with_script;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;
}
