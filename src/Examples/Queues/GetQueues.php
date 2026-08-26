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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * acd_queue_id - The ACD queue ID to filter
 * acd_queue_name - The ACD queue name part to filter
 * application_id - The application ID to filter. Can be used instead of the application_name parameter
 * application_name - The application name. Can be used instead of the application_id parameter
 * skill_id - The skill ID to filter. Can be used instead of the skill_name parameter
 * skill_name - The skill name. Can be used instead of the skill_id parameter
 * excluded_skill_id - The excluded skill ID to filter. Can be used instead of the excluded_skill_name parameter
 * excluded_skill_name - The excluded skill name. Can be used instead of the excluded_skill_id parameter
 * with_skills - Whether to get the bound skills
 * showing_skill_id - The skill to show in the 'skills' field output
 * count - The maximum returning record count
 * offset - The first N records are skipped in the output
 * with_operatorcount - Whether to include the number of agents bound to the queue
 * show_deleted - Whether to include the deleted queues
 */
$params = new GetQueuesParams();

$params->count = 2;

// Get the two queues.
$result = $voxApi->Queues->GetQueues($params);

// Show result
var_dump($result);
