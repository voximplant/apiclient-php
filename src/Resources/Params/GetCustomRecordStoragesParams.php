<?php

namespace Voximplant\Resources\Params;

class GetCustomRecordStoragesParams
{
    /** @var number Unique identifier of the custom record storage configuration. */
    public $custom_record_storage_id;

    /** @var boolean Whether to include attached applications in the response or execution. */
    public $with_applications_attached;

    public function toArray()
    {
        return [
                'custom_record_storage_id' => $this->custom_record_storage_id,
                    'with_applications_attached' => $this->with_applications_attached !== null ? (filter_var($this->with_applications_attached, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
