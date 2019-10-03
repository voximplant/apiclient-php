<?php

namespace Voximplant\Resources\Params;

class AddDialogflowKeyParams
{
	/** @var string The application ID. */
	public $application_id;

	/** @var string The application name. Can be used instead of __application_id__. */
	public $application_name;

	/** @var string Dialogflow credentials, provided by JWK (Json web key). */
	public $json_credentials;

	/** @var string The Dialogflow keys's description. */
	public $description;
}
