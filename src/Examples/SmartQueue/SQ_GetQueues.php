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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * application_id - Application ID to search by. Required unless application_name is provided.
 * application_name - Application name to search by. Required unless application_id is provided.
 * sq_queue_id - List of SmartQueue IDs separated by semicolons (;). Can be used instead of the sq_queue_name parameter
 * sq_queue_name - List of SmartQueue names separated by semicolons (;). Can be used instead of the sq_queue_id parameter
 * sq_queue_name_template - Substring of the SmartQueue name to filter
 * user_id - List of user IDs separated by semicolons (;). Queues bound to these users are returned. Can be used instead of the user_name parameter
 * user_name - List of user names separated by semicolons (;). Can be used instead of the user_id parameter
 * excluded_user_id - List of user IDs separated by semicolons (;). Queues bound to these users are excluded. Can be used instead of the excluded_user_name parameter
 * excluded_user_name - List of user names separated by semicolons (;). Can be used instead of the excluded_user_id parameter
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
