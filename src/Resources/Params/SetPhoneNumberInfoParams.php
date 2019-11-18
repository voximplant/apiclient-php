<?php

namespace Voximplant\Resources\Params;

class SetPhoneNumberInfoParams
{
    /** @var intlist The phone ID list separated by the ';' symbol or the 'all' value. */
    public $phone_id;

    /** @var stringlist The phone number list separated by the ';' symbol that can be used instead of phone_id. */
    public $phone_number;

    /** @var boolean Set true to enable the auto charging. */
    public $auto_charge;
}
