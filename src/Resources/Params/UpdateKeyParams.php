<?php

namespace Voximplant\Resources\Params;

class UpdateKeyParams
{
    /** @var string The key's ID */
    public $key_id;

    /** @var string The key's description */
    public $description;

    /** @var string The key's name, up to 50 characters. Cannot be empty */
    public $key_name;
}
