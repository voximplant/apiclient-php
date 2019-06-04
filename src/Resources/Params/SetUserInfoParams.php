<?php

namespace Voximplant\Resources\Params;

class SetUserInfoParams
{
	/** @var number The user to edit. */
	public $user_id;

	/** @var string Can be used instead of user_id. */
	public $user_name;

	/** @var number The application ID. It is required if the user_name is specified. */
	public $application_id;

	/** @var string The application name that can be used instead of application_id. */
	public $application_name;

	/** @var string The new user name in format [a-z0-9][a-z0-9_-]{2,49} */
	public $new_user_name;

	/** @var string The new user display name. The length must be less than 256. */
	public $user_display_name;

	/** @var string The new user password. The length must be at least 6 symbols. */
	public $user_password;

	/** @var boolean Does the parent account's money use? */
	public $parent_accounting;

	/** @var boolean The user enable flag */
	public $user_active;

	/** @var string Any string */
	public $user_custom_data;

	/** @var string The new user mobile phone. The length must be less than 50. */
	public $mobile_phone;
}
