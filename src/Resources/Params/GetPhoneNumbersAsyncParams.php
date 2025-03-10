<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumbersAsyncParams
{
    /** @var boolean Whether to get a CSV file with the column names */
    public $with_header;

    public function toArray()
    {
        return [
                'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
