<?php

namespace Voximplant\Resources\Params;

class GetAvailablePlansParams
{
    /** @var stringlist The plan type list separated by semicolons (;). The possible values are IM, MAU */
    public $plan_type;

    /** @var intlist The plan ID list separated by semicolons (;) */
    public $plan_subscription_template_id;
}
