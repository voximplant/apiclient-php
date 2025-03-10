<?php

namespace Voximplant\Resources\Params;

class StartConferenceParams
{
    /** @var string The conference name. The name length must be less than 50 symbols */
    public $conference_name;

    /** @var number The rule ID that needs to be launched. Please note, the necessary scenario needs to be attached to the rule */
    public $rule_id;

    /** @var number The user ID. Run the scripts from the user if set */
    public $user_id;

    /** @var string The user name that can be used instead of user_id. Run the scripts from the user if set */
    public $user_name;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var string The script custom data, that can be accessed in the scenario via the VoxEngine.customData() method. Use the application/x-www-form-urlencoded content type with UTF-8 encoding. */
    public $script_custom_data;

    /** @var string Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers */
    public $reference_ip;

    /** @var string Specifies the location of the server where the scenario needs to be executed. Has higher priority than `reference_ip`. Request [getServerLocations](https://api.voximplant.com/getServerLocations) for possible values */
    public $server_location;
}
