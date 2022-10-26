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

    public function toArray()
    {
        return [
                'country_code' => $this->country_code,
                    'phone_category_name' => $this->phone_category_name,
                    'phone_region_code' => $this->phone_region_code,
                    'regulation_address_id' => $this->regulation_address_id,
                    'verification_id' => $this->verification_id,
                    'verified' => $this->verified !== null ? (filter_var($this->verified, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'in_progress' => $this->in_progress !== null ? (filter_var($this->in_progress, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_region_code' => $this->with_region_code !== null ? (filter_var($this->with_region_code, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
