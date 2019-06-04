<?php

namespace Voximplant\Resources\Params;

class StartConferenceParams
{
	/** @var string The conference name. The name length must be less than 50 symbols. */
	public $conference_name;

	/** @var number The rule ID. */
	public $rule_id;

	/** @var number The user ID. Run the scripts from the user if set. */
	public $user_id;

	/** @var string The user name that can be used instead of user_id. Run the scripts from the user if set. */
	public $user_name;

	/** @var number The application ID. */
	public $application_id;

	/** @var string The application name that can be used instead of application_id. */
	public $application_name;

	/** @var string The script custom data (like a script argument). Can be accessed in JS scenario via the VoxEngine.customData() method */
	public $script_custom_data;

	/** @var string Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers. */
	public $reference_ip;
}
