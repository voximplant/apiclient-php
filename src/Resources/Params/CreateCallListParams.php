<?php

namespace Voximplant\Resources\Params;

class CreateCallListParams
{
    /** @var number Rule ID. It is specified in the Applications section of the Control Panel */
    public $rule_id;

    /** @var string Custom data string for the call list */
    public $list_custom_data;

    /** @var number Call list priority. The value is in the range of [0 ... 2^31] where zero is the highest priority */
    public $priority;

    /** @var number Number of simultaneously processed tasks */
    public $max_simultaneous;

    /** @var number Number of attempts. Minimum is 1, maximum is 5 */
    public $num_attempts;

    /** @var string File name, up to 255 characters and cannot contain the '/' and '\' symbols */
    public $name;

    /** @var file Send as the "body" part of the HTTP request or as multiform. The sending "file_content" via URL is at its own risk because the network devices tend to drop HTTP requests with large headers. Refer to the Call lists guide to learn about file syntax */
    public $file_content;

    /** @var number Interval between call attempts in seconds. The default value is 0 */
    public $interval_seconds;

    /** @var string Encoding file. The default value is UTF-8 */
    public $encoding;

    /** @var string Separator values. The default value is ';' */
    public $delimiter;

    /** @var string Escape character for parsing csv */
    public $escape;

    /** @var string Location of the server where the scenario needs to be executed. Has higher priority than `ip_address`. Request [getServerLocations](https://api.voximplant.com/getServerLocations) for possible values */
    public $server_location;

    /** @var string Optional. Whether to prioritize first calling attempts or repeated ones. The possible values are: first_attempts, repeated_attempts. The default values is first_attempts. */
    public $task_priority_strategy;

    /** @var string IP from the geolocation of the call list subscribers. It allows selecting the nearest server for serving subscribers. If not specified, the client IP of the request is used */
    public $ip_address;

    /** @var string Call list type. The possible values are: automatic, predictive, progressive. The value is case-insensitive */
    public $call_list_type;

    /** @var number The ACD queue ID. Required if call_list_type is predictive or progressive, and should be omitted otherwise */
    public $queue_id;

    /** @var number Time when the call list should start, as a Unix timestamp in seconds (UTC). The default value is the current time. The value cannot be in the past */
    public $start_at;

    /** @var boolean Whether to create the call list in the cancelled state */
    public $is_cancelled;

    /** @var string Quote character for parsing csv */
    public $quote;

    /** @var string The ACD version. The possible values are: V1, V2. Applies only if call_list_type is predictive or progressive */
    public $acd_version;

    /** @var string The predictive dialing algorithm. The possible values are: DEFAULT_PREDICTIVE_TYPE, AR_OPTIMIZED, BF_OPTIMIZED, AR_SMALL_GROUP, AR_AUTO_BALANCED. Applies only if call_list_type is predictive */
    public $predictive_type;

    /** @var number The maximum abandoned call rate for predictive dialing, from 0 to 1. Applies only if call_list_type is predictive or progressive */
    public $maximum_error_rate;

    /** @var number The minimum agent busy factor for predictive dialing, from 0 to 1. Applies only if call_list_type is predictive or progressive */
    public $minimum_busy_factor;

    /** @var number The task multiplier for progressive dialing. The minimum value is 1. Applies only if call_list_type is progressive */
    public $task_multiplier;

    /** @var boolean Whether the call list is a personal campaign. Applies only if call_list_type is progressive */
    public $is_personal_campaign;

    /** @var string The personal campaign mode. The possible values are: smart, strict. Allowed only if is_personal_campaign is true; the default value in that case is smart */
    public $personal_campaign_type;

    /** @var string The PDS buffer size target. The possible values are: VALUE, OPERATOR, AGENT. Applies only if call_list_type is predictive or progressive */
    public $buffer_size_target;

    /** @var number The PDS buffer size, from 20 to 500. Applies only if buffer_size_target is VALUE */
    public $buffer_size_value;

    /** @var number The PDS buffer threshold factor. Cannot be negative. Applies only if buffer_size_target is specified */
    public $buffer_threshold_factor;

    /** @var number The initial average dial time in seconds for the dialing statistics. Applies only if call_list_type is predictive or progressive */
    public $avg_dial_time_sec;

    /** @var number The initial average talk time in seconds for the dialing statistics. Applies only if call_list_type is predictive or progressive */
    public $avg_time_talk_sec;

    /** @var number The initial average total call time in seconds for the dialing statistics. Applies only if call_list_type is predictive or progressive */
    public $avg_total_time_sec;

    /** @var number The initial successful call ratio for the dialing statistics. Applies only if call_list_type is predictive or progressive */
    public $percent_successful;

    public function toArray()
    {
        return [
                'rule_id' => $this->rule_id,
                    'list_custom_data' => $this->list_custom_data,
                    'priority' => $this->priority,
                    'max_simultaneous' => $this->max_simultaneous,
                    'num_attempts' => $this->num_attempts,
                    'name' => $this->name,
                    'file_content' => $this->file_content,
                    'interval_seconds' => $this->interval_seconds,
                    'encoding' => $this->encoding,
                    'delimiter' => $this->delimiter,
                    'escape' => $this->escape,
                    'server_location' => $this->server_location,
                    'task_priority_strategy' => $this->task_priority_strategy,
                    'ip_address' => $this->ip_address,
                    'call_list_type' => $this->call_list_type,
                    'queue_id' => $this->queue_id,
                    'start_at' => $this->start_at,
                    'is_cancelled' => $this->is_cancelled !== null ? (filter_var($this->is_cancelled, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'quote' => $this->quote,
                    'acd_version' => $this->acd_version,
                    'predictive_type' => $this->predictive_type,
                    'maximum_error_rate' => $this->maximum_error_rate,
                    'minimum_busy_factor' => $this->minimum_busy_factor,
                    'task_multiplier' => $this->task_multiplier,
                    'is_personal_campaign' => $this->is_personal_campaign !== null ? (filter_var($this->is_personal_campaign, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'personal_campaign_type' => $this->personal_campaign_type,
                    'buffer_size_target' => $this->buffer_size_target,
                    'buffer_size_value' => $this->buffer_size_value,
                    'buffer_threshold_factor' => $this->buffer_threshold_factor,
                    'avg_dial_time_sec' => $this->avg_dial_time_sec,
                    'avg_time_talk_sec' => $this->avg_time_talk_sec,
                    'avg_total_time_sec' => $this->avg_total_time_sec,
                    'percent_successful' => $this->percent_successful,
            ];
    }
}
