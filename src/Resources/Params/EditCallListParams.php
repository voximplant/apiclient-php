<?php

namespace Voximplant\Resources\Params;

class EditCallListParams
{
    /** @var number Call list ID. If the ID is non existing, the 251 error returns */
    public $list_id;

    /** @var number Minimum interval between call attempts. Cannot be a negative value */
    public $interval_seconds;

    /** @var number Maximum call attempt number. Cannot be less than 1 */
    public $num_attempts;

    /** @var number Maximum simultaneous call attempts for this call list. Cannot be less than 1 */
    public $max_simultaneous;

    /** @var string IP address in the `Inet4Address` format */
    public $ip_address;

    /** @var string Call list name. Cannot be bigger than 255 characters, cannot contain slash symbol */
    public $name;

    /** @var number Call list's priority among other call list. The lower the value, the higher is the call list's priority */
    public $priority;

    /** @var string Time when the call list should start in the `yyyy-MM-dd HH:mm:ss` format */
    public $start_at;

    /** @var string Location of the server processing the call list. If the ID is non existing, the 496 error returns: The 'server_location' parameter is invalid. */
    public $server_location;
}
