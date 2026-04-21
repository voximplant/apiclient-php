<?php

namespace Voximplant\Resources\Params;

class AddSecretParams
{
    /** @var number Application ID to add the secret to */
    public $application_id;

    /** @var string Application name. Can be used instead of application_id */
    public $application_name;

    /** @var string Secret name. The name must start with a Latin letter and can contain up to 64 characters, including Latin letters, digits and underscores */
    public $secret_name;

    /** @var string Secret value. Maximum length is 8192 characters */
    public $secret_value;

    /** @var string Optional. Secret description. When processing, the length is truncated to the first 200 characters */
    public $description;
}
