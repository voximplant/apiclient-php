<?php

namespace Voximplant\Resources\Params;

class DelSecretParams
{
    /** @var number Application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist IDs to delete. A list separated by semicolons (;). Use the 'all' value to delete all secrets */
    public $secret_id;

    /** @var stringlist Secret names to delete. List separated by semicolons (;) */
    public $secret_name;
}
