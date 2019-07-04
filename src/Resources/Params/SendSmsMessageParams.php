<?php

namespace Voximplant\Resources\Params;

class SendSmsMessageParams
{
	/** @var string The source phone number. */
	public $source;

	/** @var string The destination phone number. */
	public $destination;

	/** @var string The message text, up to 70 characters. The message of 71-140 characters is billed like 2 messages; the message of 141-210 characters is billed like 3 messages and so on. */
	public $sms_body;
}
