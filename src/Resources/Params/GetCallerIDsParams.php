<?php

namespace Voximplant\Resources\Params;

class GetCallerIDsParams
{
    /** @var number The id of the callerID object to filter */
    public $callerid_id;

    /** @var string The phone number to filter */
    public $callerid_number;

    /** @var boolean The active flag to filter */
    public $active;

    /** @var string The following values are available: 'caller_number' (ascent order), 'verified_until' (ascent order) */
    public $order_by;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;
}
