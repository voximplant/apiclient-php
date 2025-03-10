<?php

namespace Voximplant\Resources\Params;

class GetBriefCallHistoryParams
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

    /** @var string To receive the call history for a specific routing rule, pass the rule name to this parameter. Applies only if you set application_id or application_name */
    public $rule_name;

    /** @var stringlist To receive a call history for a specific remote numbers, pass the number list separated by semicolons (;). A remote number is a number on the client side */
    public $remote_number;

    /** @var stringlist To receive a call history for a specific local numbers, pass the number list separated by semicolons (;). A local number is a number on the platform side */
    public $local_number;

    /** @var string To filter the call history by the custom_data passed to the call sessions, pass the custom data to this parameter */
    public $call_session_history_custom_data;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var boolean Whether to get a CSV file with the column names if the output=csv */
    public $with_header;

    /** @var string The output format. The following values available: **csv**. */
    public $output;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'call_session_history_id' => $this->call_session_history_id,
                    'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'rule_name' => $this->rule_name,
                    'remote_number' => $this->remote_number,
                    'local_number' => $this->local_number,
                    'call_session_history_custom_data' => $this->call_session_history_custom_data,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'output' => $this->output,
            ];
    }
}
