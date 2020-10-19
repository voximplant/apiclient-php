<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumberRegionsParams
{
    /** @var string The country code. */
    public $country_code;

    /** @var string The phone category name. See the [GetPhoneNumberCategories] method. */
    public $phone_category_name;

    /** @var string The country state code (example: AL, CA, ... ). */
    public $country_state;

    /** @var boolean Set to 'false' to show all the regions (with and without phone numbers in stock). */
    public $omit_empty;

    /** @var number The phone region ID to filter. */
    public $phone_region_id;

    /** @var string The phone region name to filter. */
    public $phone_region_name;

    /** @var string The region phone prefix to filter. */
    public $phone_region_code;

    /** @var string The 2-letter locale code. Supported values are EN, RU. */
    public $locale;
}
