<?php

namespace Voximplant\Resources\Params;

class A2PSendSmsParams
{
    /** @var string The SenderID for outgoing SMS. Please contact support for installing a SenderID */
    public $src_number;

    /** @var stringlist The destination phone numbers separated by semicolons (;). The maximum number of these phone numbers is 100 */
    public $dst_numbers;

    /** @var string The message text, up to 1600 characters. We split long messages greater than 160 GSM-7 characters or 70 UTF-16 characters into multiple segments. Each segment is charged as one message */
    public $text;

    /** @var boolean Whether to store outgoing message texts. Default value is false */
    public $store_body;

    public function toArray()
    {
        return [
                'src_number' => $this->src_number,
                    'dst_numbers' => $this->dst_numbers,
                    'text' => $this->text,
                    'store_body' => $this->store_body !== null ? (filter_var($this->store_body, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
