<?php

namespace Voximplant\Resources\Params;

class GetPushCredentialParams
{
    /** @var number The push credentials id */
    public $push_credential_id;

    /** @var string The push provider name. The possible values are APPLE, APPLE_VOIP, GOOGLE, HUAWEI */
    public $push_provider_name;

    /** @var number The push provider id. Can be used instead of push_provider_name */
    public $push_provider_id;

    /** @var string The name of the bound application */
    public $application_name;

    /** @var number The id of the bound application */
    public $application_id;

    /** @var boolean Set true to get the user's certificate */
    public $with_cert;

    /** @var boolean Set true to get the certificate's password */
    public $with_secret_info;

    public function toArray()
    {
        return [
                'push_credential_id' => $this->push_credential_id,
                    'push_provider_name' => $this->push_provider_name,
                    'push_provider_id' => $this->push_provider_id,
                    'application_name' => $this->application_name,
                    'application_id' => $this->application_id,
                    'with_cert' => $this->with_cert !== null ? (filter_var($this->with_cert, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_secret_info' => $this->with_secret_info !== null ? (filter_var($this->with_secret_info, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
