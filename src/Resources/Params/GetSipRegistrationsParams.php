<?php

namespace Voximplant\Resources\Params;

class GetSipRegistrationsParams
{
    /** @var number The SIP registration ID */
    public $sip_registration_id;

    /** @var string The SIP user name to filter */
    public $sip_username;

    /** @var boolean Whether to show the frozen SIP registrations only */
    public $deactivated;

    /** @var boolean Whether to show the successful SIP registrations only */
    public $successful;

    /** @var boolean Whether the SIP registration is persistent to filter */
    public $is_persistent;

    /** @var intlist The application ID list separated by semicolons (;) to filter. Can be used instead of application_name */
    public $application_id;

    /** @var stringlist The application name list separated by semicolons (;) to filter. Can be used instead of application_id */
    public $application_name;

    /** @var boolean Whether SIP registration bound to an application */
    public $is_bound_to_application;

    /** @var intlist The rule ID list separated by semicolons (;) to filter. Can be used instead of rule_name */
    public $rule_id;

    /** @var stringlist The rule name list separated by semicolons (;) to filter. Can be used instead of rule_id */
    public $rule_name;

    /** @var intlist The user ID list separated by semicolons (;) to filter. Can be used instead of user_name */
    public $user_id;

    /** @var stringlist The user name list separated by semicolons (;) to filter. Can be used instead of user_id */
    public $user_name;

    /** @var stringlist The list of proxy servers to use, divided by semicolon (;) */
    public $proxy;

    /** @var boolean Whether SIP registration is still in progress */
    public $in_progress;

    /** @var string The list of SIP response codes. The __code1:code2__ means a range from __code1__ to __code2__ including; the __code1;code2__ meanse either __code1__ or __code2__. You can combine ranges, e.g., __code1;code2:code3__ */
    public $status_code;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    public function toArray()
    {
        return [
                'sip_registration_id' => $this->sip_registration_id,
                    'sip_username' => $this->sip_username,
                    'deactivated' => $this->deactivated !== null ? (filter_var($this->deactivated, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'successful' => $this->successful !== null ? (filter_var($this->successful, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'is_persistent' => $this->is_persistent !== null ? (filter_var($this->is_persistent, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'is_bound_to_application' => $this->is_bound_to_application !== null ? (filter_var($this->is_bound_to_application, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'proxy' => $this->proxy,
                    'in_progress' => $this->in_progress !== null ? (filter_var($this->in_progress, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'status_code' => $this->status_code,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
