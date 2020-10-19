<?php

namespace Voximplant\Resources\Params;

class A2PSendSmsParams
{
    /** @var string The source phone number. */
    public $src_number;

    /** @var stringlist The destination phone numbers separated by the ';' symbol. */
    public $dst_numbers;

    /** @var string The message text, up to 1600 characters. */
    public $text;
}
