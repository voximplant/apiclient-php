<?php

namespace Voximplant\Resources\Params;

class DeactivateChildAccountSubscriptionParams
{
    /** @var number The subscription ID to be deactivated. */
    public $subscription_id;

    /** @var number The child account ID. */
    public $child_account_id;

    /** @var timestamp The deactivation UTC date in 24-h format: YYYY-MM-DD HH:mm:ss. If empty, then the current date + 1 day is used as a cancellation date. */
    public $subscription_finish_date;
}
