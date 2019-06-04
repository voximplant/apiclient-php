<?php

namespace Voximplant\Resources\Params;

class GetActualPhoneNumberRegionParams
{
	/** @var string The country code. */
	public $country_code;

	/** @var string The phone category name. See the GetPhoneNumberCategories method. */
	public $phone_category_name;

	/** @var number The phone region ID to filter. */
	public $phone_region_id;
}
