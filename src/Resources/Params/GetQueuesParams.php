<?php

namespace Voximplant\Resources\Params;

class GetQueuesParams
{
	/** @var number The ACD queue ID to filter. */
	public $acd_queue_id;

	/** @var string The ACD queue name part to filter. */
	public $acd_queue_name;

	/** @var number The application ID to filter. */
	public $application_id;

	/** @var number The skill ID to filter. */
	public $skill_id;

	/** @var number The excluded skill ID to filter. */
	public $excluded_skill_id;

	/** @var boolean Set true to get the bound skills. */
	public $with_skills;

	/** @var number The skill to show in the 'skills' field output. */
	public $showing_skill_id;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;
}
