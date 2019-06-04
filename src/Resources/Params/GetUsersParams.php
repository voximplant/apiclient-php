<?php

namespace Voximplant\Resources\Params;

class GetUsersParams
{
	/** @var number The application ID to filter. */
	public $application_id;

	/** @var string The application name part to filter. */
	public $application_name;

	/** @var number The skill ID to filter. */
	public $skill_id;

	/** @var number The excluded skill ID to filter. */
	public $excluded_skill_id;

	/** @var number The ACD queue ID to filter. */
	public $acd_queue_id;

	/** @var number The user ID to filter. */
	public $user_id;

	/** @var string The user name part to filter. */
	public $user_name;

	/** @var boolean The user active flag to filter. */
	public $user_active;

	/** @var string The user display name part to filter. */
	public $user_display_name;

	/** @var boolean Set true to get the bound skills. */
	public $with_skills;

	/** @var boolean Set true to get the bound queues. */
	public $with_queues;

	/** @var stringlist The ACD status list separated by the ';' symbol to filter. The following values are possible: OFFLINE, ONLINE, READY, BANNED, IN_SERVICE, AFTER_SERVICE, TIMEOUT, DND. */
	public $acd_status;

	/** @var number The skill to show in the 'skills' field output. */
	public $showing_skill_id;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;

	/** @var string The following values are available: 'user_id', 'user_name' and 'user_display_name'. */
	public $order_by;

	/** @var boolean Set true to get the user live balance. */
	public $return_live_balance;
}
