<?php

namespace Voximplant\Resources\Params;

class GetAvailablePlansParams
{
    /** @var stringlist The plan type list separated by semicolon (;). The possible values are IM, MAU */
    public $plan_type;

    /** @var intlist The plan ID list separated by semicolon (;) */
    public $plan_subscription_template_id;
}
