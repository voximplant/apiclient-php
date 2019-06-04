<?php

namespace Voximplant\Resources\Params;

class BindDialogflowKeysParams
{
	/** @var number The Dialogflow key's ID */
	public $dialogflow_key_id;

	/** @var intlist The application ID list separated by the ';' symbol or the 'all' value. */
	public $application_id;

	/** @var boolean Set to false to unbind. Default value is true. */
	public $bind;
}
