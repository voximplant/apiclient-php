<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumberCountryStatesParams
{
    /** @var string The country code. */
    public $country_code;

    /** @var string The phone category name. See the GetPhoneNumberCategories function. */
    public $phone_category_name;

    /** @var string The country state code (example: AL, CA, ... ). */
    public $country_state;
}
