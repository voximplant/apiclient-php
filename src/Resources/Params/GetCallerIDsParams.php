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

    public function toArray()
    {
        return [
                'callerid_id' => $this->callerid_id,
                    'callerid_number' => $this->callerid_number,
                    'active' => $this->active !== null ? (filter_var($this->active, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'order_by' => $this->order_by,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
