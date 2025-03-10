<?php

/**
 * @method RequestSmartQueueHistory Gets history for the specified SmartQueue. Refer to the <a href="/docs/guides/contact-center/reporting">SmartQueue reporting guide</a> to learn more.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\RequestSmartQueueHistoryParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID to search by
 * application_name - The application name to search by. Can be used instead of the application_id parameter
 * user_id - The user ID list with a maximum of 5 values separated by semicolons (;). Use the 'all' value to select all users. Can operate as a filter for the **occupancy_rate**, **sum_agents_online_time**, **sum_agents_ready_time**, **sum_agents_dialing_time**, **sum_agents_in_service_time**, **sum_agents_afterservice_time**, **sum_agents_dnd_time**, **sum_agents_banned_time**, **min_handle_time**, **max_handle_time**, **average_handle_time**, **count_handled_calls**, **min_after_call_worktime**, **max_after_call_worktime**, **average_after_call_worktime** report types
 * user_name - The user name list separated by semicolons (;). Can be used instead of user_id
 * sq_queue_id - The SmartQueue ID list with a maximum of 5 values separated by semicolons (;). Can operate as filter for the **calls_blocked_percentage**, **count_blocked_calls**, **average_abandonment_rate**, **count_abandonment_calls**, **service_level**, **occupancy_rate**, **min_time_in_queue**, **max_time_in_queue**, **average_time_in_queue**, **min_answer_speed**, **max_answer_speed**, **average_answer_speed**, **min_handle_time**, **max_handle_time**, **average_handle_time**, **count_handled_calls**, **min_after_call_worktime**, **max_after_call_worktime**, **average_after_call_worktime** report types
 * sq_queue_name - The SmartQueue name list separated by semicolons (;). Can be used instead of sq_queue_id
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. Default is the current time minus 1 day
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss. Default is the current time
 * timezone - The selected timezone or the 'auto' value (the account location)
 * interval - Interval format: YYYY-MM-DD HH:mm:ss. Default is 1 day
 * report_type - The report type. Possible values are: calls_blocked_percentage, count_blocked_calls, im_blocked_chats_percentage, im_count_blocked_chats, im_answered_chats_rate, average_abandonment_rate, count_abandonment_calls, service_level, im_service_level, occupancy_rate, im_agent_occupancy_rate, agent_utilization_rate, im_agent_utilization_rate, sum_agents_online_time, sum_agents_ready_time, sum_agents_dialing_time, sum_agents_in_service_time, sum_agents_in_service_incoming_time, sum_agents_in_service_outcoming_time, sum_agents_afterservice_time, sum_agents_dnd_time, sum_agents_custom_1_time, sum_agents_custom_2_time, sum_agents_custom_3_time, sum_agents_custom_4_time, sum_agents_custom_5_time, sum_agents_custom_6_time, sum_agents_custom_7_time, sum_agents_custom_8_time, sum_agents_custom_9_time, sum_agents_custom_10_time, sum_agents_banned_time, im_sum_agents_online_time, im_sum_agents_ready_time, im_sum_agents_in_service_time, im_sum_agents_dnd_time, im_sum_agents_custom_1_time, im_sum_agents_custom_2_time, im_sum_agents_custom_3_time, im_sum_agents_custom_4_time, im_sum_agents_custom_5_time, im_sum_agents_custom_6_time, im_sum_agents_custom_7_time, im_sum_agents_custom_8_time, im_sum_agents_custom_9_time, im_sum_agents_custom_10_time, im_sum_agents_banned_time, average_agents_idle_time, max_agents_idle_time, min_agents_idle_time, percentile_0_25_agents_idle_time, percentile_0_50_agents_idle_time, percentile_0_75_agents_idle_time, min_time_in_queue, max_time_in_queue, average_time_in_queue, min_answer_speed, max_answer_speed, average_answer_speed, im_min_answer_speed, im_max_answer_speed, im_average_answer_speed, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime, count_agent_unanswered_calls, im_count_agent_unanswered_chats, min_reaction_time, max_reaction_time, average_reaction_time, im_min_reaction_time, im_max_reaction_time, im_average_reaction_time, im_count_abandonment_chats, im_count_lost_chats, im_lost_chats_rate, call_count_assigned_to_queue, im_count_assigned_to_queue
 * group_by - Group the result by **agent** or *queue*. The **agent** grouping is allowed only for 1 queue and for the occupancy_rate, sum_agents_online_time, sum_agents_ready_time, sum_agents_dialing_time, sum_agents_in_service_time, sum_agents_afterservice_time, sum_agents_dnd_time, sum_agents_banned_time, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime report types. The **queue** grouping allowed for the calls_blocked_percentage, count_blocked_calls, average_abandonment_rate, count_abandonment_calls, service_level, occupancy_rate, min_time_in_queue, max_time_in_queue, average_time_in_queue, min_answer_speed, max_answer_speed, average_answer_speed, min_handle_time, max_handle_time, average_handle_time, count_handled_calls, min_after_call_worktime, max_after_call_worktime, average_after_call_worktime report types
 * max_waiting_sec - Maximum waiting time. Required for the **service_level** report type
 */
$params = new RequestSmartQueueHistoryParams();

$params->application_id = 1;
$params->sq_queue_id = 1;
$params->report_type = 'service_level';
$params->max_waiting_sec = 6;
$params->from_date = '2021-03-17 00:00:00';
$params->to_date = '2021-03-17 22:00:00';

// Generate a service_level report file in csv format for the period from 2021-03-17 00:00:00 to 2021-03-17 22:00:00.
$result = $voxApi->SmartQueue->RequestSmartQueueHistory($params);

// Show result
var_dump($result);
