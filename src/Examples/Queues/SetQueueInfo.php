<?php

/**
 * @method SetQueueInfo Edits the ACD queue.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetQueueInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * acd_queue_id - The ACD queue ID.
 * new_acd_queue_name - The new queue name. The length must be less than 100.
 */
$params = new SetQueueInfoParams();

$params->acd_queue_id = 1;
$params->new_acd_queue_name = 'support';

// Change the queue name.
$result = $voxApi->Queues->SetQueueInfo($params);

// Show result
var_dump($result);
