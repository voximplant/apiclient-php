<?php

namespace Voximplant\Resources\Params;

class GetWABPhoneNumbersParams
{
    /** @var string WhatsApp Business phone number */
    public $wab_phone_number;

    /** @var number Application ID that is bound to the WhatsApp Business phone number */
    public $application_id;

    /** @var string Bound application name that can be used instead of application_id */
    public $application_name;

    /** @var string Country code filter (2 symbols) for the WhatsApp Business phone number */
    public $country_code;

    /** @var number Maximum returning records count */
    public $count;

    /** @var number Number of records to be skipped in the result */
    public $offset;
}
