<?php

namespace Voximplant\Resources\Params;

class AddWABPhoneNumberParams
{
    /** @var string WhatsApp Business phone number */
    public $wab_phone_number;

    /** @var string WhatsApp Business SIP password */
    public $voice_password;

    /** @var string WhatsApp Business phone number description */
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
