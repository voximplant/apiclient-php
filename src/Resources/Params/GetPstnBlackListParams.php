<?php

namespace Voximplant\Resources\Params;

class GetPstnBlackListParams
{
	/** @var number The PSTN black list item ID for filter. */
	public $pstn_blacklist_id;

	/** @var string The phone number in format e164 for filter. */
	public $pstn_blacklist_phone;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;
}
