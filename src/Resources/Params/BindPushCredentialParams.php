<?php

namespace Voximplant\Resources\Params;

class BindPushCredentialParams
{
    /** @var intlist The push credentials ID list separated by the ';' symbol */
    public $push_credential_id;

    /** @var intlist The application ID list separated by the ';' symbol. Use the 'all' value to select all applications */
    public $application_id;

    /** @var boolean Set to false for unbind. Default value is true */
    public $bind;
}
