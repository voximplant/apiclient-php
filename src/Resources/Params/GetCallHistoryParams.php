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

    /** @var intlist To receive the call history for a specific users, pass the user ID list separated by semicolons (;). If it is specified, the output contains the calls from the listed users only */
    public $user_id;

    /** @var string To receive the call history for a specific routing rule, pass the rule name to this parameter. Applies only if you set application_id or application_name */
    public $rule_name;

    /** @var stringlist To receive a call history for a specific remote numbers, pass the number list separated by semicolons (;). A remote number is a number on the client side. Ignored if the `remote_number_list` parameter is not empty */
    public $remote_number;

    /** @var object A JS array of strings of specific remote phone numbers to sort the call history. Has higher priority than the `remote_number` parameter. If the array is empty, the `remote_number` parameter is used instead */
    public $remote_number_list;

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

    /** @var boolean Whether to include the 'total_count' and increase performance */
    public $with_total_count;

    /** @var number The number of returning records. The maximum value is 1000 */
    public $count;

    /** @var number The number of records to skip in the output. The maximum value of 10000 */
    public $offset;

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
                    'remote_number_list' => $this->remote_number_list,
                    'local_number' => $this->local_number,
                    'call_session_history_custom_data' => $this->call_session_history_custom_data,
                    'with_calls' => $this->with_calls !== null ? (filter_var($this->with_calls, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_records' => $this->with_records !== null ? (filter_var($this->with_records, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_other_resources' => $this->with_other_resources !== null ? (filter_var($this->with_other_resources, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'child_account_id' => $this->child_account_id,
                    'children_calls_only' => $this->children_calls_only !== null ? (filter_var($this->children_calls_only, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_total_count' => $this->with_total_count !== null ? (filter_var($this->with_total_count, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
