<?php

namespace Voximplant\Resources\Params;

class GetSecretsParams
{
    /** @var number Application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name. Required unless application_id is provided. */
    public $application_name;

    /** @var string Filter by the secret name part */
    public $secret_name_part;

    /** @var number Maximum returning number of records */
    public $count;

    /** @var number First N records to be skipped in the output */
    public $offset;
}
