<?php

namespace Voximplant\Resources\Params;

class GetRecordStoragesParams
{
    /** @var intlist The record storage ID list separated by semicolons (;) */
    public $record_storage_id;

    /** @var stringlist The record storage name list separated by semicolons (;) */
    public $record_storage_name;

    /** @var boolean Whether to get the private record storages. If set to true, there is the __is_public : bool__ parameter in a response */
    public $with_private;

    public function toArray()
    {
        return [
                'record_storage_id' => $this->record_storage_id,
                    'record_storage_name' => $this->record_storage_name,
                    'with_private' => $this->with_private !== null ? (filter_var($this->with_private, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
