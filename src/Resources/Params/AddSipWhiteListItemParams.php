<?php

namespace Voximplant\Resources\Params;

class AddSipWhiteListItemParams
{
    /** @var string The network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16) */
    public $sip_whitelist_network;

    /** @var string The network address description */
    public $description;
}
