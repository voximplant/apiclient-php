<?php

namespace Voximplant\Resources\Params;

class GetSecretValueParams
{
    /** @var number Application ID */
    public $application_id;

    /** @var string Application name. Can be used instead of application_id */
    public $application_name;

    /** @var number Secret ID */
    public $secret_id;

    /** @var string Secret name. Can be used instead of secret_id */
    public $secret_name;
}
