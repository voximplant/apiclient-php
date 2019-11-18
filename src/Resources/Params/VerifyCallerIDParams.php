<?php

namespace Voximplant\Resources\Params;

class VerifyCallerIDParams
{
    /** @var number The id of the callerID object. */
    public $callerid_id;

    /** @var string The callerID number that can be used instead of callerid_id. */
    public $callerid_number;
}
