<?php

namespace Voximplant\Resources\Params;

class DelCallerIDParams
{
    /** @var number ID of the callerID object. Required unless callerid_number is provided. */
    public $callerid_id;

    /** @var string The callerID number. Required unless callerid_id is provided. */
    public $callerid_number;
}
