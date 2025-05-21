<?php

namespace Voximplant\Resources\Params;

class GetDialogflowKeysParams
{
    /** @var number Dialogflow key's ID */
    public $dialogflow_key_id;

    /** @var string Name of the bound application */
    public $application_name;

    /** @var number ID of the bound application */
    public $application_id;

    /** @var boolean Whether to get the json web key */
    public $with_secret_info;

    public function toArray()
    {
        return [
                'dialogflow_key_id' => $this->dialogflow_key_id,
                    'application_name' => $this->application_name,
                    'application_id' => $this->application_id,
                    'with_secret_info' => $this->with_secret_info !== null ? (filter_var($this->with_secret_info, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
