<?php

namespace Voximplant\Resources\Params;

class AddChildAccountSubscriptionParams
{
    /** @var number The child account ID. */
    public $child_account_id;

    /** @var number The subscription template ID. */
    public $subscription_template_id;

    /** @var string The subscription name. */
    public $subscription_name;
}
