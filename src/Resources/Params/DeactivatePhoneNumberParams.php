<?php

namespace Voximplant\Resources\Params;

class DeactivatePhoneNumberParams
{
    /** @var intlist The phone ID list separated by semicolons (;). Use the 'all' value to select all phone ids. Required unless phone_number is provided. */
    public $phone_id;

    /** @var stringlist The phone number list separated by semicolons (;). Required unless phone_id is provided. */
    public $phone_number;
}
