<?php

namespace Voximplant\Resources\Params;

class ChargeAccountParams
{
    /** @var intlist The phone ID list separated by the ';' symbol. Use the 'all' value to select all phone ids. You should specify the phones having the auto_charge=false */
    public $phone_id;

    /** @var stringlist The phone number list separated by the ';' symbol. Use the 'all' value to select all phone numbers. Can be used instead of phone_id. You should specify the phones having the auto_charge=false */
    public $phone_number;
}
