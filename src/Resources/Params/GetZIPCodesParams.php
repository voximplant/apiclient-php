<?php

namespace Voximplant\Resources\Params;

class GetZIPCodesParams
{
	/** @var string The country code according to the ISO 3166-1 alpha-2. */
	public $country_code;

	/** @var string The phone region code */
	public $phone_region_code;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;
}
