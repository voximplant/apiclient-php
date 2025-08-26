<?php

namespace Voximplant\Resources\Params;

class SetWABPhoneNumberInfoParams
{
    /** @var string WhatsApp Business phone number to change details for */
    public $wab_phone_number;

    /** @var string New WhatsApp Business SIP password */
    public $voice_password;

    /** @var string New WhatsApp Business phone number description */
    public $description;

    /** @var number Bound application ID */
    public $application_id;

    /** @var string Bound application name that can be used instead of application_id */
    public $application_name;

    /** @var number Bound rule ID */
    public $rule_id;

    /** @var string Bound rule name that can be used instead of rule_id */
    public $rule_name;
}
