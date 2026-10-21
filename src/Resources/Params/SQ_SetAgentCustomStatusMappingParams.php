<?php

namespace Voximplant\Resources\Params;

class SQ_SetAgentCustomStatusMappingParams
{
    /** @var string Status name */
    public $sq_status_name;

    /** @var string Custom status name */
    public $custom_status_name;

    /** @var number Application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name. Required unless application_id is provided. */
    public $application_name;
}
