<?php

/**
 * @method SQ_DeleteAgentCustomStatusMapping Removes a mapping from the mapping table. If there is no such mapping, does nothing.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_DeleteAgentCustomStatusMappingParams;

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
 * sq_status_name - Status name
 * application_id - Application ID
 */
$params = new SQ_DeleteAgentCustomStatusMappingParams();

$params->sq_status_name = 'READY';
$params->application_id = 1;

// Remove a mapping for sq_status_name = READY.
$result = $voxApi->SmartQueue->SQ_DeleteAgentCustomStatusMapping($params);

// Show result
var_dump($result);
