<?php

namespace Voximplant\Resources\Params;

class GetAvailablePlansParams
{
    /** @var stringlist The plan type list separated by the ';' symbol. The possible values are IM, MAU */
    public $plan_type;

    /** @var intlist The plan ID list separated by the ';' symbol */
    public $plan_subscription_template_id;
}
