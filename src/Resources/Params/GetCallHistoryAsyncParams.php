<?php

namespace Voximplant\Resources\Params;

class GetCallHistoryAsyncParams
{
    /** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. If both dates are omitted, a server-configured default interval is used (default is one month) */
    public $from_date;

    /** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. If both dates are omitted, a server-configured default interval is used (default is one month) */
    public $to_date;

    /** @var number The minimum call duration in seconds to filter. You can restrict the allowed date range via duration filters */
    public $min_duration;

    /** @var number The maximum call duration in seconds to filter. You can restrict the allowed date range via duration filters */
    public $max_duration;

    /** @var string A JSON-formatted list of strings containing phone numbers for history filtering. Has a higher priority than the remote_number parameter. If the array is empty, the remote_number parameter is used instead */
    public $remote_number_list;

    /** @var number The maximum number of records to include in the report. If omitted, the report service applies its own limit. Unlike GetCallHistory, there is no default of 20 and no cap of 1000 on the Management API side */
    public $count;

    /** @var number The number of records to skip in the output */
    public $offset;

    /** @var intlist To get the call history for the specific sessions, pass the session IDs to this parameter separated by a semicolon (;). You can find the session ID in the AppEvents.Started event's sessionID property in a scenario, or retrieve it from the call_session_history_id value returned from the StartScenarios or StartConference methods */
    public $call_session_history_id;

    /** @var number To receive the call history for a specific application, pass the application ID to this parameter */
    public $application_id;

    /** @var string The application name, can be used instead of application_id */
    public $application_name;

    /** @var intlist To receive the call history for a specific users, pass the user ID list separated by semicolons (;). If it is specified, the output contains the calls from the listed users only */
    public $user_id;

    /** @var string To receive the call history for a specific routing rule, pass the rule name to this parameter. Applies only if you set application_id or application_name */
    public $rule_name;

    /** @var stringlist To receive a call history for a specific remote numbers, pass the number list separated by semicolons (;). A remote number is a number on the client side */
    public $remote_number;

    /** @var stringlist To receive a call history for a specific local numbers, pass the number list separated by semicolons (;). A local number is a number on the platform side */
    public $local_number;

    /** @var string To filter the call history by the custom_data passed to the call sessions, pass the custom data to this parameter */
    public $call_session_history_custom_data;

    /** @var boolean Whether to receive a list of sessions with all calls within the sessions, including phone numbers, call cost and other information */
    public $with_calls;

    /** @var boolean Whether to get the calls' records */
    public $with_records;

    /** @var boolean Whether to get other resources usage (see [ResourceUsageType]) */
    public $with_other_resources;

    /** @var intlist The child account ID list separated by semicolons (;) */
    public $child_account_id;

    /** @var boolean Whether to get the children account calls only */
    public $children_calls_only;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var boolean Whether to get a CSV file with the column names if the output=csv */
    public $with_header;

    /** @var string The output format. The following values available: **csv**. The default value is **csv** */
    public $output;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'min_duration' => $this->min_duration,
                    'max_duration' => $this->max_duration,
                    'remote_number_list' => $this->remote_number_list,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'call_session_history_id' => $this->call_session_history_id,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'user_id' => $this->user_id,
                    'rule_name' => $this->rule_name,
                    'remote_number' => $this->remote_number,
                    'local_number' => $this->local_number,
                    'call_session_history_custom_data' => $this->call_session_history_custom_data,
                    'with_calls' => $this->with_calls !== null ? (filter_var($this->with_calls, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_records' => $this->with_records !== null ? (filter_var($this->with_records, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_other_resources' => $this->with_other_resources !== null ? (filter_var($this->with_other_resources, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'child_account_id' => $this->child_account_id,
                    'children_calls_only' => $this->children_calls_only !== null ? (filter_var($this->children_calls_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'output' => $this->output,
            ];
    }
}
