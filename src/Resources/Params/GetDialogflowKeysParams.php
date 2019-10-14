<?php

namespace Voximplant\Resources\Params;

class GetDialogflowKeysParams
{
	/** @var number The Dialogflow key's ID. */
	public $dialogflow_key_id;

	/** @var string The name of bound application. */
	public $application_name;

	/** @var number The id of bound application. */
	public $application_id;

	/** @var boolean Set true to get the json web key. */
	public $with_secret_info;
}
