<?php

namespace Voximplant\Resources\Params;

class AttachPhoneNumberParams
{
    /** @var number The phone count to attach */
    public $phone_count;

    /** @var stringlist The phone number that can be used instead of phone_count. See the [GetNewPhoneNumbers] method */
    public $phone_number;

    /** @var string The country code */
    public $country_code;

    /** @var string The phone category name. See the [GetPhoneNumberCategories] method */
    public $phone_category_name;

    /** @var string The country state. See the [GetPhoneNumberCategories] and [GetPhoneNumberCountryStates] methods */
    public $country_state;

    /** @var number The phone region ID. See the [GetPhoneNumberRegions] method */
    public $phone_region_id;

    /** @var number The phone regulation address ID */
    public $regulation_address_id;

    /** @var boolean Whether the force verification is enabled */
    public $force_verification;

    public function toArray()
    {
        return [
                'phone_count' => $this->phone_count,
                    'phone_number' => $this->phone_number,
                    'country_code' => $this->country_code,
                    'phone_category_name' => $this->phone_category_name,
                    'country_state' => $this->country_state,
                    'phone_region_id' => $this->phone_region_id,
                    'regulation_address_id' => $this->regulation_address_id,
                    'force_verification' => $this->force_verification !== null ? (filter_var($this->force_verification, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
