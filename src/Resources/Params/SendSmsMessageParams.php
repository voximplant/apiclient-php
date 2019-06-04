<?php

namespace Voximplant\Resources\Params;

class SendSmsMessageParams
{
	/** @var string The source phone number. */
	public $source;

	/** @var string The destination phone number. */
	public $destination;

	/** @var string The message. */
	public $sms_body;
}
