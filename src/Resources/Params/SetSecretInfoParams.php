<?php

namespace Voximplant\Resources\Params;

class SetSecretInfoParams
{
    /** @var number Application ID. Required unless application_name is provided. */
    public $application_id;

    /** @var string Application name. Required unless application_id is provided. */
    public $application_name;

    /** @var number Secret ID to edit. Required unless secret_name is provided. */
    public $secret_id;

    /** @var string Secret name. Required unless secret_id is provided. */
    public $secret_name;

    /** @var string New secret name. The name must start with a Latin letter and can contain up to 64 characters, including Latin letters, digits and underscores */
    public $new_secret_name;

    /** @var string Secret value. Maximum length is 8192 characters */
    public $secret_value;

    /** @var string Secret description. When processing, the length is truncated to the first 200 characters */
    public $description;
}
