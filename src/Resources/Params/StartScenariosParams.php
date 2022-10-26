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

    /** @var number The rule ID */
    public $rule_id;

    /** @var string The script custom data (like a script argument). Can be accessed in JS scenario via the VoxEngine.customData() method */
    public $script_custom_data;

    /** @var string Specifies the IP from the geolocation of predicted subscribers. It allows selecting the nearest server for serving subscribers */
    public $reference_ip;

    /** @var boolean Set true to get media server session lists url */
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
                    'with_check_url' => $this->with_check_url !== null ? (filter_var($this->with_check_url, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
