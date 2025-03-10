<?php

namespace Voximplant\Resources\Params;

class SetPhoneNumberInfoParams
{
    /** @var intlist The phone ID list separated by semicolons (;). Use the 'all' value to select all phone ids */
    public $phone_id;

    /** @var stringlist The phone number list separated by semicolons (;) that can be used instead of phone_id */
    public $phone_number;

    /** @var string If set, the callback of an incoming SMS is sent to this url, otherwise, it is sent to the general account URL */
    public $incoming_sms_callback_url;

    /** @var boolean Whether to enable the auto charging */
    public $auto_charge;

    public function toArray()
    {
        return [
                'phone_id' => $this->phone_id,
                    'phone_number' => $this->phone_number,
                    'incoming_sms_callback_url' => $this->incoming_sms_callback_url,
                    'auto_charge' => $this->auto_charge !== null ? (filter_var($this->auto_charge, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
