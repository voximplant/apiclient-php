<?php

/**
 * @method SQ_GetAgentCustomStatusMapping Returns the mapping list of SQ statuses and custom statuses. SQ statuses are returned whether they have mappings to custom statuses.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_GetAgentCustomStatusMappingParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - Application ID
 */
$params = new SQ_GetAgentCustomStatusMappingParams();

$params->application_id = 1;

// Get the status mappings.
$result = $voxApi->SmartQueue->SQ_GetAgentCustomStatusMapping($params);

// Show result
var_dump($result);
