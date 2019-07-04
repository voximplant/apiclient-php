<?php

namespace Voximplant\Resources\Params;

class GetKeysParams
{
	/** @var string The key's ID. */
	public $key_id;

	/** @var boolean Show roles for the key. */
	public $with_roles;

	/** @var number The first N records will be skipped in the output. */
	public $offset;

	/** @var number The max returning record count. */
	public $count;
}
