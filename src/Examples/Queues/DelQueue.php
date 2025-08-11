<?php

/**
 * @method DelQueue Deletes the ACD queue.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelQueueParams;

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
 * acd_queue_id - The ACD queue ID list separated by semicolons (;)
 * acd_queue_name - The ACD queue name that can be used instead of acd_queue_id. The ACD queue name list separated by semicolons (;)
 */
$params = new DelQueueParams();

$params->acd_queue_id = 1;

// Delete the ACD queue 1.
$result = $voxApi->Queues->DelQueue($params);

// Show result
var_dump($result);
