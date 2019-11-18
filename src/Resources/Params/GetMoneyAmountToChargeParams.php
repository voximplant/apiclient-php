<?php

namespace Voximplant\Resources\Params;

class GetMoneyAmountToChargeParams
{
    /** @var string The currency name. Examples: USD, RUR, EUR. */
    public $currency;

    /** @var date The next charge date, format: YYYY-MM-DD */
    public $charge_date;
}
