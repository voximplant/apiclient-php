<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumberCategoriesParams
{
    /** @var stringlist Country code list separated by the ';' symbol */
    public $country_code;

    /** @var string Flag allows you to display phone number categories only of the sandbox, real or all .The following values are possible: 'all', 'true', 'false' */
    public $sandbox;

    /** @var string The 2-letter locale code. Supported values are EN, RU */
    public $locale;
}
