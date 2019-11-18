<?php

namespace Voximplant\Resources\Params;

class GetAuthorizedAccountIPsParams
{
    /** @var string The authorized IP4 or network to filter. */
    public $authorized_ip;

    /** @var boolean The allowed flag to filter. */
    public $allowed;

    /** @var string Specify the parameter to filter the networks that contains the particular IP4. */
    public $contains_ip;

    /** @var number The max returning record count. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;
}
