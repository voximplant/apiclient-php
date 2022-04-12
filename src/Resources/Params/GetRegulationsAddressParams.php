<?php

namespace Voximplant\Resources\Params;

class GetRegulationsAddressParams
{
    /** @var string The country code according to the ISO 3166-1 alpha-2 */
    public $country_code;

    /** @var string The phone category name. See the [GetPhoneNumberCategories] method */
    public $phone_category_name;

    /** @var string The phone region code. See the [GetRegions] method */
    public $phone_region_code;

    /** @var number The regulation address ID */
    public $regulation_address_id;

    /** @var number The regulation address type ID */
    public $verification_id;

    /** @var boolean Show only verified regulation address */
    public $verified;

    /** @var boolean Show only in progress regulation address */
    public $in_progress;

    /** @var boolean Return with phone_region_code parameters */
    public $with_region_code;
}
