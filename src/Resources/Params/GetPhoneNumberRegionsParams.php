<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumberRegionsParams
{
    /** @var string The country code */
    public $country_code;

    /** @var string The phone category name. See the [GetPhoneNumberCategories] method */
    public $phone_category_name;

    /** @var string The country state code (example: AL, CA, ... ) */
    public $country_state;

    /** @var boolean Whether not to show all the regions (with and without phone numbers in stock) */
    public $omit_empty;

    /** @var number The phone region ID to filter */
    public $phone_region_id;

    /** @var string The phone region name to filter */
    public $phone_region_name;

    /** @var string The region phone prefix to filter */
    public $phone_region_code;

    /** @var string The 2-letter locale code. Supported values are EN, RU */
    public $locale;

    public function toArray()
    {
        return [
                'country_code' => $this->country_code,
                    'phone_category_name' => $this->phone_category_name,
                    'country_state' => $this->country_state,
                    'omit_empty' => $this->omit_empty !== null ? (filter_var($this->omit_empty, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'phone_region_id' => $this->phone_region_id,
                    'phone_region_name' => $this->phone_region_name,
                    'phone_region_code' => $this->phone_region_code,
                    'locale' => $this->locale,
            ];
    }
}
