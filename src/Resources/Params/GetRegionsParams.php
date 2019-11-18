<?php

namespace Voximplant\Resources\Params;

class GetRegionsParams
{
    /** @var string The country code according to the ISO 3166-1 alpha-2. */
    public $country_code;

    /** @var string The phone category name. See the GetPhoneNumberCategories method. */
    public $phone_category_name;

    /** @var string The pattern of city's name */
    public $city_name;

    /** @var number The returned regions count. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;
}
