<?php

namespace Voximplant\Resources\Params;

class SetPstnBlackListItemParams
{
    /** @var number The PSTN black list item ID */
    public $pstn_blacklist_id;

    /** @var string The new phone number in format e164 */
    public $pstn_blacklist_phone;
}
