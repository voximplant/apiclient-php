<?php

namespace Voximplant\Resources\Params;

class SetSipWhiteListItemParams
{
	/** @var number The SIP white list item ID */
	public $sip_whitelist_id;

	/** @var string The new network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16) */
	public $sip_whitelist_network;
}
