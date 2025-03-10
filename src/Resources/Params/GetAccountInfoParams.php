<?php

namespace Voximplant\Resources\Params;

class GetAccountInfoParams
{
    /** @var boolean Whether to get the account's live balance */
    public $return_live_balance;

    public function toArray()
    {
        return [
                'return_live_balance' => $this->return_live_balance !== null ? (filter_var($this->return_live_balance, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
