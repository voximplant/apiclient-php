<?php

namespace Voximplant\Resources\Params;

class StartScenariosParams
{
    /** @var number The user ID. Run the scripts from the user if set */
    public $user_id;

    /** @var string The user name that can be used instead of user_id. Run the scripts from the user if set */
    public $user_name;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var number The rule ID that needs to be launched. Please note, the necessary scenario needs to be attached to the rule */
    public $rule_id;

    /** @var string The script custom data, that can be accessed in the scenario via the VoxEngine.customData() method. Use the application/x-www-form-urlencoded content type with UTF-8 encoding */
    public $script_custom_data;

    /** @var string Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers */
    public $reference_ip;

    /** @var string Specifies the location of the server where the scenario needs to be executed. Has higher priority than `reference_ip`. Request [getServerLocations](https://api.voximplant.com/getServerLocations) for possible values */
    public $server_location;

    /** @var boolean Whether to get media server session lists url */
    public $with_check_url;

    public function toArray()
    {
        return [
                'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'rule_id' => $this->rule_id,
                    'script_custom_data' => $this->script_custom_data,
                    'reference_ip' => $this->reference_ip,
                    'server_location' => $this->server_location,
                    'with_check_url' => $this->with_check_url !== null ? (filter_var($this->with_check_url, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
