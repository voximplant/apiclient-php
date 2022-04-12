<?php

/**
 * @method StartNextCallTask Start processing the next task.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\StartNextCallTaskParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * list_id - The list of the call list IDs
 * custom_params - The custom param to pass the call initiator parameters to the scenario
 */
$params = new StartNextCallTaskParams();

$params->list_id = 1;

// Start the next call task.
$result = $voxApi->CallLists->StartNextCallTask($params);

// Show result
var_dump($result);
