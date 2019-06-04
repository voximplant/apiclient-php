<?php

namespace Voximplant\Resources\Params;

class DelAuthorizedAccountIPParams
{
	/** @var string The authorized IP4 or network to remove. Set to 'all' to remove all items. */
	public $authorized_ip;

	/** @var string Can be used instead of autharized_ip. Specify the parameter to remove the networks that contains the particular IP4. */
	public $contains_ip;

	/** @var boolean Set true to remove the network from the white list. Set false to remove the network from the black list. Omit the parameter to remove the network from all lists. */
	public $allowed;
}
