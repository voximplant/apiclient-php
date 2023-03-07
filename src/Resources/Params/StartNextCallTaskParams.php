<?php

namespace Voximplant\Resources\Params;

class StartNextCallTaskParams
{
    /** @var intlist The list of the call list IDs separated by semicolon (;) */
    public $list_id;

    /** @var string The custom param to pass the call initiator parameters to the scenario */
    public $custom_params;
}
