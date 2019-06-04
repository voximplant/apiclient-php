<?php

namespace Voximplant\Resources\Params;

class GetCurrencyRateParams
{
	/** @var stringlist The currency code list separated by the ';' symbol. Examples: RUR, EUR, USD */
	public $currency;

	/** @var date The date, format: YYYY-MM-DD */
	public $date;
}
