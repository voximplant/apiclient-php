<?php

namespace Voximplant\Resources\Params;

class AddAuthorizedAccountIPParams
{
	/** @var string The authorized IP4 or network. */
	public $authorized_ip;

	/** @var boolean Set false to add the IP to the blacklist. */
	public $allowed;
}
