<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumberCategoriesParams
{
    /** @var string The country code. */
    public $country_code;

    /** @var string Flag allows you to display phone number categories only of the sandbox, real or all .The following values are possible: 'all', 'true', 'false'. */
    public $sandbox;
}
