<?php

namespace Voximplant\Resources\Params;

class A2PSendSmsParams
{
    /** @var string The source phone number */
    public $src_number;

    /** @var stringlist The destination phone numbers separated by the ';' symbol. The maximum number of these phone numbers is 100 */
    public $dst_numbers;

    /** @var string The message text, up to 1600 characters. We split long messages greater than 160 GSM-7 characters or 70 UTF-16 characters into multiple segments. Each segment is charged as one message */
    public $text;
}
