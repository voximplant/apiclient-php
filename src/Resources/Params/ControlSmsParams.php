<?php

namespace Voximplant\Resources\Params;

class ControlSmsParams
{
    /** @var string The phone number */
    public $phone_number;

    /** @var string The SMS control command. The following values are possible: enable, disable */
    public $command;
}
