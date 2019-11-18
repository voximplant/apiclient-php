<?php

namespace Voximplant\Resources\Params;

class GetApplicationsParams
{
    /** @var number The application ID to filter. */
    public $application_id;

    /** @var string The application name part to filter. */
    public $application_name;

    /** @var number The user ID to filter. */
    public $user_id;

    /** @var number The excluded user ID to filter. */
    public $excluded_user_id;

    /** @var number Specify the user ID value to show it in the 'users' array output. */
    public $showing_user_id;

    /** @var boolean Set true to get bound rules info. */
    public $with_rules;

    /** @var boolean Set true to get bound rules and scenarios info. */
    public $with_scenarios;

    /** @var number The max returning record count. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;
}
