<?php

namespace Voximplant\Resources\Params;

class StartNextCallTaskParams
{
	/** @var number The list Id. Can use a set of identifiers with the separator ";" */
	public $list_id;

	/** @var string The custom param. Use to transfer the call initiator parameters to the scenario. */
	public $custom_params;
}
