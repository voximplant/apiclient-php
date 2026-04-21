<?php

namespace Voximplant\Resources\Params;

class DelSecretParams
{
    /** @var number Application ID */
    public $application_id;

    /** @var string Application name. Can be used instead of application_id */
    public $application_name;

    /** @var intlist IDs to delete. A list separated by semicolons (;). Use the 'all' value to delete all secrets */
    public $secret_id;

    /** @var stringlist Secret names to delete. List separated by semicolons (;) */
    public $secret_name;
}
