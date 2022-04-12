<?php

namespace Voximplant\Resources\Params;

class GetSubscriptionPriceParams
{
    /** @var intlist The subscription template ID list separated by the ';' symbol */
    public $subscription_template_id;

    /** @var string The subscription template type. The following values are possible: PHONE_NUM, SIP_REGISTRATION */
    public $subscription_template_type;

    /** @var string The subscription template name  (example: SIP registration, Phone GB, Phone RU 495, ...) */
    public $subscription_template_name;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;
}
