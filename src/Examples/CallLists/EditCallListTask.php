<?php

/**
 * @method EditCallListTask Edits the specified call list's task.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\EditCallListTaskParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * list_id - Call list's ID
 * task_id - Call list's task ID. Please specify either the task's ID or the task's UUID to edit the task
 * task_uuid - Call list's task ID. Please specify either the task's ID or the task's UUID to edit the task
 * start_at - Next calling attempts timestamp in the yyyy-MM-dd HH:mm:ss format
 * attempts_left - Number of remaining calling attempts
 * custom_data - Custom data string
 * min_execution_time - Start time for the daily calling attempts in the UTC+0 24-h format: HH:mm:ss format
 */
$params = new EditCallListTaskParams();

$params->list_id = 1;
$params->task_id = 1;
$params->attempts_left = 2;
$params->start_at = '2023-11-13 18:00:00';
$params->custom_data = '{"phone":"555111222333","name":"Mr.Fate"}';

// Set attempts_left, start_at, and custom_data the task with id=1 in the call list with id=1.
$result = $voxApi->CallLists->EditCallListTask($params);

// Show result
var_dump($result);
