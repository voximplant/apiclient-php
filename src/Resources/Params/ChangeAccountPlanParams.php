<?php

namespace Voximplant\Resources\Params;

class ChangeAccountPlanParams
{
    /** @var string The plan type to config. The possible values are IM, MAU */
    public $plan_type;

    /** @var number The new plan ID with a price larger than the current plan's (see [GetAvailablePlans]) */
    public $plan_subscription_template_id;
}
