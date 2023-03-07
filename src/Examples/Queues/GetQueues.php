<?php

/**
 * @method GetQueues Gets the ACD queues.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetQueuesParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * acd_queue_id - The ACD queue ID to filter
 * acd_queue_name - The ACD queue name part to filter
 * application_id - The application ID to filter
 * skill_id - The skill ID to filter
 * excluded_skill_id - The excluded skill ID to filter
 * with_skills - Set true to get the bound skills
 * showing_skill_id - The skill to show in the 'skills' field output
 * count - The max returning record count
 * offset - The first N records will be skipped in the output
 * with_operatorcount - Number of agents bound to the queue
 */
$params = new GetQueuesParams();

$params->count = 2;

// Get the two queues.
$result = $voxApi->Queues->GetQueues($params);

// Show result
var_dump($result);
