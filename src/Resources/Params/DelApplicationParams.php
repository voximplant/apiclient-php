<?php

namespace Voximplant\Resources\Params;

class DelApplicationParams
{
    /** @var intlist The application ID list separated by the ';' symbol or the 'all' value. */
    public $application_id;

    /** @var stringlist The application name list separated by the ';' symbol. Can be used instead of appliction_id. */
    public $application_name;
}
