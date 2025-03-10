<?php

namespace Voximplant\Resources\Params;

class SendSmsMessageParams
{
    /** @var string The source phone number */
    public $source;

    /** @var string The destination phone number */
    public $destination;

    /** @var string The message text, up to 765 characters. We split long messages greater than 160 GSM-7 characters or 70 UTF-16 characters into multiple segments. Each segment is charged as one message */
    public $sms_body;

    /** @var boolean Whether to store outgoing message texts. Default value is false */
    public $store_body;

    public function toArray()
    {
        return [
                'source' => $this->source,
                    'destination' => $this->destination,
                    'sms_body' => $this->sms_body,
                    'store_body' => $this->store_body !== null ? (filter_var($this->store_body, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
