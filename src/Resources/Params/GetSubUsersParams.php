<?php

namespace Voximplant\Resources\Params;

class GetSubUsersParams
{
    /** @var number The subuser's ID */
    public $subuser_id;

    /** @var boolean Show subuser's roles */
    public $with_roles;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    /** @var number The max returning record count */
    public $count;
}
