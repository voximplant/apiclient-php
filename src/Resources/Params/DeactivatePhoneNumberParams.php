<?php

namespace Voximplant\Resources\Params;

class DeactivatePhoneNumberParams
{
    /** @var intlist The phone ID list separated by the ';' symbol. Use the 'all' value to select all phone ids */
    public $phone_id;

    /** @var stringlist The phone number list separated by the ';' symbol that can be used instead of phone_id */
    public $phone_number;
}
