<?php

namespace Voximplant\Resources\Params;

class CreateKeyParams
{
    /** @var string The key's description */
    public $description;

    /** @var string The key's name, up to 50 characters. Cannot be empty */
    public $key_name;

    /** @var intlist The role ID list separated by semicolons (;). Use it instead of **role_name**, but not combine with */
    public $role_id;

    /** @var stringlist The role name list separated by semicolons (;). Use it instead of **role_id**, but not combine with */
    public $role_name;
}
