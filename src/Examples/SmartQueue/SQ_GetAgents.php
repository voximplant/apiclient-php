<?php

/**
 * @method SQ_GetAgents Gets agents.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_GetAgentsParams;

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
 * sq_queue_id - List of SmartQueue IDs separated by semicolons (;). Use 'all' to select all the queues
 * sq_queue_name - List of SmartQueue names separated by semicolons (;). Can be used instead of sq_queue_id
 * excluded_sq_queue_id - ID of the SmartQueue to exclude
 * excluded_sq_queue_name - Name of the SmartQueue to exclude. Can be used instead of excluded_sq_queue_id
 * sq_skills - Skills to filter in the json array format. The array should contain objects with the sq_skill_id/sq_skill_name, min_sq_skill_level, and max_sq_skill_level keys where skill levels range from 1 to 5
 * user_id - List of user IDs separated by semicolons (;)
 * user_name - List of user names separated by semicolons (;). Can be used instead of user_id
 * user_name_template - Substring of the user name to filter
 * sq_statuses - Filter statuses in the json array format. The array should contain objects with the sq_status_type and sq_status_name keys. Possible values for sq_status_type are 'CALL' and 'IM'. Possible values for sq_status_name are 'OFFLINE', 'ONLINE', 'READY', 'IN_SERVICE', 'AFTER_SERVICE', 'DND'
 * with_sq_skills - Whether to display agent skills
 * with_sq_queues - Whether to display agent queues
 * with_sq_statuses - Whether to display agent current statuses
 * count - Number of items to show in the output
 * offset - Number of items to skip in the output
 * handle_calls - Whether the agent can handle calls. When set to false, the agent is excluded from the CALL-request distribution
 */
$params = new SQ_GetAgentsParams();

$params->application_id = 1;
$params->with_sq_statuses = true;
$params->handle_calls = false;

// Get all agents with their current statuses.
$result = $voxApi->SmartQueue->SQ_GetAgents($params);

// Show result
var_dump($result);
