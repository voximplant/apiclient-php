<?php

namespace Voximplant\Resources\Params;

class AddDialogflowKeyParams
{
	/** @var string The application name. */
	public $external_app_name;

	/** @var string Dialogflow credentials, provided by JWK (Json web key). */
	public $json_credentials;

	/** @var string The Dialogflow keys's description. */
	public $description;
}
