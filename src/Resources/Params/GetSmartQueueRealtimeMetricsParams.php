<?php

namespace Voximplant\Resources\Params;

class GetSmartQueueRealtimeMetricsParams
{
    /** @var number The application ID to search by */
    public $application_id;

    /** @var string The application name to search by. Can be used instead of the application_id parameter */
    public $application_name;

    /** @var intlist The user ID list with a maximum of 5 values separated by the ';' symbol. Use the 'all' value to select all users. Can operate as a filter for the **occupancy_rate**, **sum_agents_online_time**, **sum_agents_ready_time**, **sum_agents_dialing_time**, **sum_agents_in_service_time**, **sum_agents_afterservice_time**, **sum_agents_dnd_time**, **sum_agents_banned_time**, **min_handle_time**, **max_handle_time**, **average_handle_time**, **count_handled_calls**, **min_after_call_worktime**, **max_after_call_worktime**, **average_after_call_worktime** report types */
    public $user_id;

    /** @var stringlist The user name list separated by the ';' symbol. user_name can be used instead of user_id */
    public $user_name;

    /** @var intlist The smart queue ID list with a maximum of 5 values separated by the ';' symbol. Can operate as filter for the **calls_blocked_percentage**, **count_blocked_calls**, **average_abandonment_rate**, **count_abandonment_calls**, **service_level**, **occupancy_rate**, **min_time_in_queue**, **max_time_in_queue**, **average_time_in_queue**, **min_answer_speed**, **max_answer_speed**, **average_answer_speed**, **min_handle_time**, **max_handle_time**, **average_handle_time**, **count_handled_calls**, **min_after_call_worktime**, **max_after_call_worktime**, **average_after_call_worktime** report types */
    public $sq_queue_id;

    /** @var stringlist The smart queue name list separated by the ';' symbol. Can be used instead of sq_queue_id */
    public $sq_queue_name;

    /** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. Default is the current time minus 30 minutes */
    public $from_date;

    /** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. Default is the current time */
    public $to_date;

    /** @var string The selected timezone or the 'auto' value (the account location) */
    public $timezone;

    /** @var string Interval format: YYYY-MM-DD HH:mm:ss. Default is 30 minutes */
    public $interval;

    /** @var stringlist The report type. Possible values are calls_blocked_percentage, count_blocked_calls, average_abandonment_rate, count_abandonment_calls, service_level, occupancy_rate, sum_agents_online_time, sum_agents_ready_time, sum_agents_dialing_time, sum_agents_in_service_time, sum_agents_afterservice_time, sum_agents_dnd_time, sum_agents_banned_time, min_time_in_queue,max_time_in_queue, average_time_in_queue, min_answer_speed, max_answer_speed, average_answer_speed, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime */
    public $report_type;

    /** @var string Group the result by **agent** or *queue*. The **agent** grouping is allowed for 1 queue and for the occupancy_rate, sum_agents_online_time, sum_agents_ready_time, sum_agents_dialing_time, sum_agents_in_service_time, sum_agents_afterservice_time, sum_agents_dnd_time, sum_agents_banned_time, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime report types. The **queue** grouping allowed for the calls_blocked_percentage, count_blocked_calls, average_abandonment_rate, count_abandonment_calls, service_level, occupancy_rate, min_time_in_queue, max_time_in_queue, average_time_in_queue, min_answer_speed, max_answer_speed, average_answer_speed, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime report types */
    public $group_by;

    /** @var number Maximum waiting time. Required for the **service_level** report type */
    public $max_waiting_sec;
}
