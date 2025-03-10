<?php

namespace Voximplant\Resources\Params;

class CreateCallListParams
{
    /** @var number The rule ID. It is specified in the Applications section of the Control Panel */
    public $rule_id;

    /** @var number Call list priority. The value is in the range of [0 ... 2^31] where zero is the highest priority */
    public $priority;

    /** @var number Number of simultaneously processed tasks */
    public $max_simultaneous;

    /** @var number Number of attempts. Minimum is 1, maximum is 5 */
    public $num_attempts;

    /** @var string File name, up to 255 characters and cannot contain the '/' and '\' symbols */
    public $name;

    /** @var file Send as "body" part of the HTTP request or as multiform. The sending "file_content" via URL is at its own risk because the network devices tend to drop HTTP requests with large headers */
    public $file_content;

    /** @var number Interval between call attempts in seconds. The default is 0 */
    public $interval_seconds;

    /** @var string Encoding file. The default is UTF-8 */
    public $encoding;

    /** @var string Separator values. The default is ';' */
    public $delimiter;

    /** @var string Escape character for parsing csv */
    public $escape;

    /** @var string Specifies the IP from the geolocation of the call list subscribers. It allows selecting the nearest server for serving subscribers */
    public $reference_ip;

    /** @var string Specifies the location of the server where the scenario needs to be executed. Has higher priority than `reference_ip`. Request [getServerLocations](https://api.voximplant.com/getServerLocations) for possible values */
    public $server_location;
}
