<?php

namespace Voximplant\Resources\Params;

class GetSecretValueParams
{
    /** @var number Application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name. Required unless application_id is provided. */
    public $application_name;

    /** @var number Secret ID. Required unless secret_name is provided. */
    public $secret_id;

    /** @var string Secret name. Required unless secret_id is provided. */
    public $secret_name;
}
