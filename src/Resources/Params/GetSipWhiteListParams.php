<?php

namespace Voximplant\Resources\Params;

class GetSipWhiteListParams
{
    /** @var number The SIP white list item ID to filter */
    public $sip_whitelist_id;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;
}
