<?php

namespace Voximplant\Resources\Params;

class AddApplicationParams
{
	/** @var string The short application name in format [a-z][a-z0-9-]{1,79} */
	public $application_name;

	/** @var boolean Enable secure storage for all logs and records of the application */
	public $secure_record_storage;
}
