<?php

namespace Voximplant\Resources\Params;

class AddSubUserParams
{
	/** @var string Login of a new subuser. */
	public $new_subuser_login;

	/** @var string Password of a new subuser, plain text. */
	public $new_subuser_password;

	/** @var string The role id list separated by the ';' symbol. */
	public $role_id;

	/** @var string The role name list separated by the ';' symbol. */
	public $role_name;

	/** @var string Description of a new subuser. */
	public $description;
}
