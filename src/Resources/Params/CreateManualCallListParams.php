<?php

namespace Voximplant\Resources\Params;

class CreateManualCallListParams
{
	/** @var number The rule ID. */
	public $rule_id;

	/** @var number Call list priority. The value is in the range of [0 ... 2^31] where zero is the highest priority. */
	public $priority;

	/** @var number Number simultaneously processed tasks. */
	public $max_simultaneous;

	/** @var number Number of attempts. Should be equal or greater than 1 */
	public $num_attempts;

	/** @var string File name. */
	public $name;

	/** @var string Send as "body" part of the HTTP request or as multiform. The sending "file_content" via URL is at its own risk because the network devices tend to drop HTTP requests with large headers. */
	public $file_content;

	/** @var number Interval between call attempts in seconds. The default is 0. */
	public $interval_seconds;

	/** @var string Encoding file. The default is UTF-8. */
	public $encoding;

	/** @var string Separator values. The default is ';' */
	public $delimiter;

	/** @var string Escape character. Used for parsing csv */
	public $escape;

	/** @var string Specifies the IP from the geolocation of call list subscribers. It allows selecting the nearest server for serving subscribers. */
	public $reference_ip;
}
