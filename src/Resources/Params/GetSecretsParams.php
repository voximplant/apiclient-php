<?php

namespace Voximplant\Resources\Params;

class GetSecretsParams
{
    /** @var number Application ID */
    public $application_id;

    /** @var string Application name. Can be used instead of application_id */
    public $application_name;

    /** @var string Filter by the secret name part */
    public $secret_name_part;

    /** @var number Maximum returning record number */
    public $count;

    /** @var number First N records to be skipped in the output */
    public $offset;
}
