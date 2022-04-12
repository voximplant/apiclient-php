<?php

/**
 * @method DelDialogflowKey Removes a Dialogflow key.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelDialogflowKeyParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * dialogflow_key_id - The Dialogflow key's ID
 */
$params = new DelDialogflowKeyParams();

$params->dialogflow_key_id = 1;

// Remove key.
$result = $voxApi->DialogflowCredentials->DelDialogflowKey($params);

// Show result
var_dump($result);
