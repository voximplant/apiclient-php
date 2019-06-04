<?php

namespace Voximplant\Resources\Params;

class DelQueueParams
{
	/** @var intlist The ACD queue ID list separated by the ';' symbol. */
	public $acd_queue_id;

	/** @var stringlist The ACD queue name that can be used instead of acd_queue_id. The ACD queue name list separated by the ';' symbol. */
	public $acd_queue_name;
}
