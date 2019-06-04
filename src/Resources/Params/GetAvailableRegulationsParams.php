<?php

namespace Voximplant\Resources\Params;

class GetAvailableRegulationsParams
{
	/** @var string The country code according to the ISO 3166-1 alpha-2. */
	public $country_code;

	/** @var string The phone category name. See the GetPhoneNumberCategories method. */
	public $phone_category_name;

	/** @var string The phone region code. See the GetRegions method. */
	public $phone_region_code;
}
