<?php

namespace Voximplant\Resources\Params;

class RequestSmartQueueHistoryParams
{
    /** @var number The application ID to search by. Required unless application_name is provided. */
    public $application_id;

    /** @var string The application name to search by. Required unless application_id is provided. */
    public $application_name;

    /** @var intlist The user ID list with a maximum of 5 values separated by semicolons (;). Use the 'all' value to select all users. Can operate as a filter for the **occupancy_rate**, **sum_agents_online_time**, **sum_agents_ready_time**, **sum_agents_dialing_time**, **sum_agents_in_service_time**, **sum_agents_afterservice_time**, **sum_agents_dnd_time**, **sum_agents_banned_time**, **min_handle_time**, **max_handle_time**, **average_handle_time**, **count_handled_calls**, **min_after_call_worktime**, **max_after_call_worktime**, **average_after_call_worktime** report types. Can be used instead of the user_name parameter */
    public $user_id;

    /** @var stringlist The user name list separated by semicolons (;). Can be used instead of the user_id parameter */
    public $user_name;

    /** @var intlist The SmartQueue ID list with a maximum of 5 values separated by semicolons (;). Can operate as filter for the **calls_blocked_percentage**, **count_blocked_calls**, **average_abandonment_rate**, **count_abandonment_calls**, **service_level**, **occupancy_rate**, **min_time_in_queue**, **max_time_in_queue**, **average_time_in_queue**, **min_answer_speed**, **max_answer_speed**, **average_answer_speed**, **min_handle_time**, **max_handle_time**, **average_handle_time**, **count_handled_calls**, **min_after_call_worktime**, **max_after_call_worktime**, **average_after_call_worktime** report types. Required unless sq_queue_name is provided or all the requested report types are agent reports. */
    public $sq_queue_id;

    /** @var stringlist The SmartQueue name list separated by semicolons (;). Required unless sq_queue_id is provided or all the requested report types are agent reports. */
    public $sq_queue_name;

    /** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. Default is the current time minus 1 day */
    public $from_date;

    /** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. Default is the current time */
    public $to_date;

    /** @var string The selected timezone or the 'auto' value (the account location) */
    public $timezone;

    /** @var string Interval format: YYYY-MM-DD HH:mm:ss. Default is 1 day */
    public $interval;

    /** @var stringlist The report type. Possible values are: calls_blocked_percentage, count_blocked_calls, im_blocked_chats_percentage, im_count_blocked_chats, im_answered_chats_rate, average_abandonment_rate, count_abandonment_calls, service_level, im_service_level, occupancy_rate, im_agent_occupancy_rate, agent_utilization_rate, im_agent_utilization_rate, sum_agents_online_time, sum_agents_ready_time, sum_agents_dialing_time, sum_agents_in_service_time, sum_agents_in_service_incoming_time, sum_agents_in_service_outcoming_time, sum_agents_afterservice_time, sum_agents_dnd_time, sum_agents_custom_1_time, sum_agents_custom_2_time, sum_agents_custom_3_time, sum_agents_custom_4_time, sum_agents_custom_5_time, sum_agents_custom_6_time, sum_agents_custom_7_time, sum_agents_custom_8_time, sum_agents_custom_9_time, sum_agents_custom_10_time, sum_agents_banned_time, im_sum_agents_online_time, im_sum_agents_ready_time, im_sum_agents_in_service_time, im_sum_agents_dnd_time, im_sum_agents_custom_1_time, im_sum_agents_custom_2_time, im_sum_agents_custom_3_time, im_sum_agents_custom_4_time, im_sum_agents_custom_5_time, im_sum_agents_custom_6_time, im_sum_agents_custom_7_time, im_sum_agents_custom_8_time, im_sum_agents_custom_9_time, im_sum_agents_custom_10_time, im_sum_agents_banned_time, average_agents_idle_time, max_agents_idle_time, min_agents_idle_time, percentile_0_25_agents_idle_time, percentile_0_50_agents_idle_time, percentile_0_75_agents_idle_time, min_time_in_queue, max_time_in_queue, average_time_in_queue, min_answer_speed, max_answer_speed, average_answer_speed, im_min_answer_speed, im_max_answer_speed, im_average_answer_speed, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime, count_agent_unanswered_calls, im_count_agent_unanswered_chats, min_reaction_time, max_reaction_time, average_reaction_time, im_min_reaction_time, im_max_reaction_time, im_average_reaction_time, im_count_abandonment_chats, im_count_lost_chats, im_lost_chats_rate, call_count_assigned_to_queue, im_count_assigned_to_queue */
    public $report_type;

    /** @var string Group the result by **agent** or *queue*. The **agent** grouping is allowed only for 1 queue and for the occupancy_rate, sum_agents_online_time, sum_agents_ready_time, sum_agents_dialing_time, sum_agents_in_service_time, sum_agents_afterservice_time, sum_agents_dnd_time, sum_agents_banned_time, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime report types. The **queue** grouping allowed for the calls_blocked_percentage, count_blocked_calls, average_abandonment_rate, count_abandonment_calls, service_level, occupancy_rate, min_time_in_queue, max_time_in_queue, average_time_in_queue, min_answer_speed, max_answer_speed, average_answer_speed, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime report types */
    public $group_by;

    /** @var number Maximum waiting time. Required for the **service_level** report type */
    public $max_waiting_sec;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var boolean Whether to get a CSV file with the column names if the output=csv */
    public $with_header;

    /** @var string The decimal mark for CSV numbers: a dot or a comma. If omitted, the account setting is used */
    public $decimal_separator;

    /** @var boolean Whether to omit the empty metric values from the result */
    public $omit_empty;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'user_id' => $this->user_id,
                    'user_name' => $this->user_name,
                    'sq_queue_id' => $this->sq_queue_id,
                    'sq_queue_name' => $this->sq_queue_name,
                    'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'timezone' => $this->timezone,
                    'interval' => $this->interval,
                    'report_type' => $this->report_type,
                    'group_by' => $this->group_by,
                    'max_waiting_sec' => $this->max_waiting_sec,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'decimal_separator' => $this->decimal_separator,
                    'omit_empty' => $this->omit_empty !== null ? (filter_var($this->omit_empty, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
            ];
    }
}
