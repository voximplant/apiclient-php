<?php

/**
 * @method SQ_SetAgentCustomStatusMapping Adds a status if there is no match for the given internal status and renames it if there is a match. It means that if the passed **sq_status_name** parameter is not in the mapping table, a new entry is created in there; if it is, the **name** field in its mapping is replaced with **custom_status_name**.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_SetAgentCustomStatusMappingParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * sq_status_name - Status name
 * custom_status_name - Custom status name
 * application_id - Application ID
 */
$params = new SQ_SetAgentCustomStatusMappingParams();

$params->sq_status_name = 'READY';
$params->custom_status_name = 'ReadyForCall';
$params->application_id = 1;

// Add/rename a status depending on the presence of an internal status in agent_status_mapping.
$result = $voxApi->SmartQueue->SQ_SetAgentCustomStatusMapping($params);

// Show result
var_dump($result);
