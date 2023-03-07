<?php

namespace Voximplant\Resources\Params;

class GetCallHistoryParams
{
    /** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_date;

    /** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_date;

    /** @var intlist To get the call history for the specific sessions, pass the session IDs to this parameter separated by a semicolon (;). You can find the session ID in the AppEvents.Started event's sessionID property in a scenario, or retrieve it from the call_session_history_id value returned from the StartScenarios or StartConference methods */
    public $call_session_history_id;

    /** @var number To receive the call history for a specific application, pass the application ID to this parameter */
    public $application_id;

    /** @var string The application name, can be used instead of application_id */
    public $application_name;

    /** @var intlist To receive the call history for a specific users, pass the user ID list separated by semicolon (;). If it's specified, the output contains the calls from the listed users only */
    public $user_id;

    /** @var string To receive the call history for a specific routing rule, pass the rule name to this parameter. Applies only if you set application_id or application_name */
    public $rule_name;

    /** @var stringlist To receive a call history for a specific remote numbers, pass the number list separated by semicolon (;). A remote number is a number on the client side */
    public $remote_number;

    /** @var stringlist To receive a call history for a specific local numbers, pass the number list separated by semicolon (;). A local number is a number on the platform side */
    public $local_number;

    /** @var string To filter the call history by the custom_data passed to the call sessions, pass the custom data to this parameter */
    public $call_session_history_custom_data;

    /** @var boolean Specifies whether to receive a list of sessions with all calls within the sessions, including phone numbers, call cost and other information */
    public $with_calls;

    /** @var boolean Specifies whether to get the calls' records */
    public $with_records;

    /** @var boolean Set true to get other resources usage (see [ResourceUsageType]) */
    public $with_other_resources;

    /** @var intlist The child account ID list separated by semicolon (;). Use the 'all' value to select all child accounts */
    public $child_account_id;

    /** @var boolean Set true to get the children account calls only */
    public $children_calls_only;

    /** @var boolean Set false to get a CSV file without the column names if the output=csv */
    public $with_header;

    /** @var boolean Set true to get records in the descent order */
    public $desc_order;

    /** @var boolean Set false to omit the 'total_count' and increase performance */
    public $with_total_count;

    /** @var number The number of returning records. In the synchronous mode, the maximum value is 1000 */
    public $count;

    /** @var number The number of records to skip in the output with a maximum value of 10000 */
    public $offset;

    /** @var string The output format. The following values available: json, csv */
    public $output;

    /** @var boolean Set true to get records in the asynchronous mode (for csv output only). Use this mode to download large amounts of data. See the [GetHistoryReports], [DownloadHistoryReport] functions for details */
    public $is_async;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
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
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_total_count' => $this->with_total_count !== null ? (filter_var($this->with_total_count, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'output' => $this->output,
                    'is_async' => $this->is_async !== null ? (filter_var($this->is_async, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
