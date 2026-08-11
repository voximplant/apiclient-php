<?php

namespace Voximplant\Resources\Params;

class EditCallListParams
{
    /** @var number Call list ID. If the ID is non existing, the 251 error returns */
    public $list_id;

    /** @var string Custom data string for the call list */
    public $list_custom_data;

    /** @var number Minimum interval between call attempts. Cannot be a negative value */
    public $interval_seconds;

    /** @var number Maximum call attempt number. Cannot be less than 1 */
    public $num_attempts;

    /** @var number Maximum simultaneous call attempts for this call list. Cannot be less than 1 */
    public $max_simultaneous;

    /** @var string IP address in the `Inet4Address` format */
    public $ip_address;

    /** @var string Call list name. Cannot be bigger than 255 characters, cannot contain slash symbol */
    public $name;

    /** @var number Call list's priority among other call list. The lower the value, the higher is the call list's priority */
    public $priority;

    /** @var number Time when the call list should start, as a Unix timestamp in seconds (UTC) */
    public $start_at;

    /** @var string Optional. Whether to prioritize first calling attempts or repeated ones. The possible values are: first_attempts, repeated_attempts. The default values is first_attempts */
    public $task_priority_strategy;

    /** @var string Location of the server processing the call list. If the ID is non existing, the 496 error returns: The 'server_location' parameter is invalid. */
    public $server_location;

    /** @var string Call list type. The possible values are: automatic, manual, predictive, progressive. The value is case-insensitive */
    public $call_list_type;

    /** @var string Alias for call_list_type. Applies only if call_list_type is not specified */
    public $call_type;

    /** @var string The predictive dialing algorithm. The possible values are: AR_OPTIMIZED, BF_OPTIMIZED, AR_SMALL_GROUP, AR_AUTO_BALANCED. If omitted while call_list_type is set to predictive, the value becomes AR_OPTIMIZED; for progressive the value is reset */
    public $predictive_type;

    /** @var number The maximum abandoned call rate for predictive dialing, from 0 to 1. If omitted while call_list_type is set to predictive, the value becomes 0.02 */
    public $maximum_error_rate;

    /** @var number The minimum agent busy factor for predictive dialing. Cannot be negative. If omitted while call_list_type is set to predictive, the value becomes 0.8 */
    public $minimum_busy_factor;

    /** @var number The task multiplier for progressive dialing. Cannot be negative. If omitted while call_list_type is set to progressive, the value becomes 1 */
    public $task_multiplier;

    /** @var boolean Whether the call list is a personal campaign. Required if personal_campaign_type is specified */
    public $is_personal_campaign;

    /** @var string The personal campaign mode. The possible values are: smart, strict. Allowed only if is_personal_campaign is true; the default value in that case is smart */
    public $personal_campaign_type;

    /** @var number The average dial time in seconds for the dialing statistics. Cannot be negative */
    public $avg_dial_time_sec;

    /** @var number The average talk time in seconds for the dialing statistics. Cannot be negative */
    public $avg_time_talk_sec;

    /** @var number The average total call time in seconds for the dialing statistics. Cannot be negative */
    public $avg_total_time_sec;

    /** @var number The successful call ratio for the dialing statistics. Cannot be negative */
    public $percent_successful;

    public function toArray()
    {
        return [
                'list_id' => $this->list_id,
                    'list_custom_data' => $this->list_custom_data,
                    'interval_seconds' => $this->interval_seconds,
                    'num_attempts' => $this->num_attempts,
                    'max_simultaneous' => $this->max_simultaneous,
                    'ip_address' => $this->ip_address,
                    'name' => $this->name,
                    'priority' => $this->priority,
                    'start_at' => $this->start_at,
                    'task_priority_strategy' => $this->task_priority_strategy,
                    'server_location' => $this->server_location,
                    'call_list_type' => $this->call_list_type,
                    'call_type' => $this->call_type,
                    'predictive_type' => $this->predictive_type,
                    'maximum_error_rate' => $this->maximum_error_rate,
                    'minimum_busy_factor' => $this->minimum_busy_factor,
                    'task_multiplier' => $this->task_multiplier,
                    'is_personal_campaign' => $this->is_personal_campaign !== null ? (filter_var($this->is_personal_campaign, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'personal_campaign_type' => $this->personal_campaign_type,
                    'avg_dial_time_sec' => $this->avg_dial_time_sec,
                    'avg_time_talk_sec' => $this->avg_time_talk_sec,
                    'avg_total_time_sec' => $this->avg_total_time_sec,
                    'percent_successful' => $this->percent_successful,
            ];
    }
}
