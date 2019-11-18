<?php

namespace Voximplant\Resources\Params;

class DeactivatePhoneNumberParams
{
    /** @var number The phone ID. */
    public $phone_id;

    /** @var string The phone number that can be used instead of phone_id. */
    public $phone_number;
}
