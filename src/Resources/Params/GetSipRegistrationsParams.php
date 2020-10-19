<?php

namespace Voximplant\Resources\Params;

class GetSipRegistrationsParams
{
    /** @var number The SIP registration ID. */
    public $sip_registration_id;

    /** @var string The SIP user name to filter. */
    public $sip_username;

    /** @var boolean Set true to show the frozen SIP registrations only. */
    public $deactivated;

    /** @var boolean Set false to show the unsuccessful SIP registrations only. */
    public $successful;

    /** @var boolean The persistent flag to filter. */
    public $is_persistent;

    /** @var intlist The application ID list separated by the ';' symbol to filter. Can be used instead of appliction_name. */
    public $application_id;

    /** @var stringlist The application name list separated by the ';' symbol to filter. Can be used instead of appliction_id. */
    public $application_name;

    /** @var boolean Is a SIP registration bound to an application. */
    public $is_bound_to_application;

    /** @var intlist The rule ID list separated by the ';' symbol to filter. Can be used instead of rule_name. */
    public $rule_id;

    /** @var stringlist The rule name list separated by the ';' symbol to filter. Can be used instead of rule_id. */
    public $rule_name;

    /** @var intlist The user ID list separated by the ';' symbol to filter. Can be used instead of user_name. */
    public $user_id;

    /** @var stringlist The user name list separated by the ';' symbol to filter. Can be used instead of user_id. */
    public $user_name;

    /** @var stringlist The list of proxy servers to use, divided by the ';' symbol. */
    public $proxy;

    /** @var boolean SIP registration is still in progress. */
    public $in_progress;

    /** @var string The list of SIP response codes. The __code1:code2__ means a range from __code1__ to __code2__ including; the __code1;code2__ meanse either __code1__ or __code2__. You can combine ranges, e.g., __code1;code2:code3__. */
    public $status_code;

    /** @var number The max returning record count. */
    public $count;

    /** @var number The first N records will be skipped in the output. */
    public $offset;
}
