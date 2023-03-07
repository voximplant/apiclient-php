<?php

namespace Voximplant\Resources\Params;

class DeleteRecordParams
{
    /** @var string The record URL to remove. You can retrieve the record URL via the CallSessionInfoType.records method */
    public $record_url;

    /** @var number The record ID to remove. You can retrieve the record ID via the CallSessionInfoType.records method */
    public $record_id;
}
