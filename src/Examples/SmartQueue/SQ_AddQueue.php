<?php

/**
 * @method SQ_AddQueue Adds a new queue.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_AddQueueParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - ID of the application to bind to
 * application_name - Name of the application to bind to. Can be used instead of application_id
 * sq_queue_name - Unique SmartQueue name within the application, up to 100 characters
 * call_agent_selection - Agent selection strategy for calls. Accepts one of the following values: "MOST_QUALIFIED", "LEAST_QUALIFIED", "MAX_WAITING_TIME"
 * im_agent_selection - Agent selection strategy for messages. Accepts one of the following values: "MOST_QUALIFIED", "LEAST_QUALIFIED", "MAX_WAITING_TIME". The default value is **call_agent_selection**
 * call_task_selection - Call type requests prioritizing strategy. Accepts one of the [SQTaskSelectionStrategies] enum values
 * im_task_selection - IM type requests prioritizing strategy. Accepts one of the [SQTaskSelectionStrategies] enum values. The default value is **call_task_selection**
 * fallback_agent_selection - Agent selection strategy, applied when it is not possible to wait for a suitable free agent. Currently not used
 * description - Comment, up to 200 characters
 * call_max_waiting_time - Maximum time in minutes that a CALL-type request can remain in the queue without being assigned to an agent
 * im_max_waiting_time - Maximum time in minutes that an IM-type request can remain in the queue without being assigned to an agent
 * call_max_queue_size - Maximum size of the queue with CALL-type requests
 * im_max_queue_size - Maximum size of the queue with IM-type requests
 * priority - The queue's priority from 1 to 100
 */
$params = new SQ_AddQueueParams();

$params->application_id = 1;
$params->sq_queue_name = 'smartQueue1';
$params->call_agent_selection = 'MOST_QUALIFIED';
$params->call_task_selection = 'MAX_WAITING_TIME';

// Add a new queue.
$result = $voxApi->SmartQueue->SQ_AddQueue($params);

// Show result
var_dump($result);
