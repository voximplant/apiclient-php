<?php

/**
 * @method SQ_GetQueues Gets the queue(s).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_GetQueuesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - ID of the application to search by
 * application_name - Name of the application to search by. Can be used instead of application_id
 * sq_queue_id - List of SmartQueue IDs separated by semicolons (;)
 * sq_queue_name - List of SmartQueue names separated by semicolons (;). Can be used instead of sq_queue_id
 * sq_queue_name_template - Substring of the SmartQueue name to filter
 * user_id - ID of the user that is bound to the queue
 * user_name - Name of the user that is bound to the queue. Can be used instead of user_id
 * excluded_user_id - ID of the user that is not bound to the queue
 * excluded_user_name - Name of the user that is not bound to the queue. Can be used instead of excluded_user_id
 * count - Number of items to show in the output
 * offset - Number of items to skip in the output
 * with_agentcount - Whether to include the number of agents bound to the queue
 */
$params = new SQ_GetQueuesParams();

$params->application_id = 1;
$params->sq_queue_id = array (
    0 => 1,
    1 => 2,
);

// Get all the queues.
$result = $voxApi->SmartQueue->SQ_GetQueues($params);

// Show result
var_dump($result);
