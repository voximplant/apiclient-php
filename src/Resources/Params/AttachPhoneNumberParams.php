<?php

namespace Voximplant\Resources\Params;

class AttachPhoneNumberParams
{
	/** @var number The phone count to attach. */
	public $phone_count;

	/** @var string The phone number that can be used instead of phone_count. See the GetNewPhoneNumbers method. */
	public $phone_number;

	/** @var string The country code. */
	public $country_code;

	/** @var string The phone category name. See the GetPhoneNumberCategories method. */
	public $phone_category_name;

	/** @var string The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates methods. */
	public $country_state;

	/** @var number The phone region ID. See the GetPhoneNumberRegions method. */
	public $phone_region_id;

	/** @var number The phone regulation address ID. */
	public $regulation_address_id;

	/** @var boolean The force verification flag. */
	public $force_verification;
}
