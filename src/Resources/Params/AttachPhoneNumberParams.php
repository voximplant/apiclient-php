<?php

namespace Voximplant\Resources\Params;

class AttachPhoneNumberParams
{
    /** @var number Quantity of phone numbers you want to attach. If neither this parameter nor phone_number is specified, one phone number is attached from the catalog */
    public $phone_count;

    /** @var stringlist The phone numbers to attach, separated by semicolons (;). See the [GetNewPhoneNumbers] method. If neither this parameter nor phone_count is specified, one phone number is attached from the catalog */
    public $phone_number;

    /** @var string The country code. Required together with phone_category_name and phone_region_id to purchase from the catalog; not needed when attaching a specific phone number via phone_number */
    public $country_code;

    /** @var string The phone category name. See the [GetPhoneNumberCategories] method. Required together with country_code and phone_region_id to purchase from the catalog; not needed when attaching a specific phone number via phone_number */
    public $phone_category_name;

    /** @var string The country state. See the [GetPhoneNumberCategories] and [GetPhoneNumberCountryStates] methods */
    public $country_state;

    /** @var number The phone region ID. See the [GetPhoneNumberRegions] method. Required together with country_code and phone_category_name to purchase from the catalog; not needed when attaching a specific phone number via phone_number */
    public $phone_region_id;

    /** @var number The phone regulation address ID */
    public $regulation_address_id;
}
