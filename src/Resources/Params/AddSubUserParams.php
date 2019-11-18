<?php

namespace Voximplant\Resources\Params;

class AddSubUserParams
{
    /** @var string Login of a new subuser for authentication, should be unique within the Voximplant account. The login specified is always converted to lowercase. */
    public $new_subuser_name;

    /** @var string Password of a new subuser, plain text. */
    public $new_subuser_password;

    /** @var intlist The role id list separated by the ';' symbol. */
    public $role_id;

    /** @var stringlist The role name list separated by the ';' symbol. */
    public $role_name;

    /** @var string Description of a new subuser. */
    public $description;
}
