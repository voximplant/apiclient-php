<?php

namespace Voximplant\Resources\Params;

class AddRuleParams
{
	/** @var number The application ID. */
	public $application_id;

	/** @var string The application name, can be used instead of application_id. */
	public $application_name;

	/** @var string The rule name. The length must be less than 100 */
	public $rule_name;

	/** @var string The rule pattern regex. The length must be less than 64 KB. */
	public $rule_pattern;

	/** @var string The exclude pattern regex. The length must be less than 64 KB. */
	public $rule_pattern_exclude;

	/** @var boolean Is video conference required? */
	public $video_conference;

	/** @var intlist The scenario ID list separated by the ';' symbol. */
	public $scenario_id;

	/** @var stringlist Can be used instead of scenario_id. The scenario name list separated by the ';' symbol. */
	public $scenario_name;
}
