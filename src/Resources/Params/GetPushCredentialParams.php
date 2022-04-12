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
}
