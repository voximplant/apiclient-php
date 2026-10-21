<?php

namespace Voximplant\Resources\Params;

class GetAccountVerificationsParams
{
    /** @var number Account ID to check verifications for */
    public $account_id;

    /** @var boolean Whether to return the active verification only */
    public $active_verification_only;

    public function toArray()
    {
        return [
                'account_id' => $this->account_id,
                    'active_verification_only' => $this->active_verification_only !== null ? (filter_var($this->active_verification_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
