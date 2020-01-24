<?php

/**
 * @method GetDialogflowKeys Get Dialogflow keys.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetDialogflowKeysParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * dialogflow_key_id - The Dialogflow key's ID.
 * application_name - The name of bound application.
 * application_id - The id of bound application.
 * with_secret_info - Set true to get the json web key.
 */
$params = new GetDialogflowKeysParams();

$params->dialogflow_key_id = 1;

// Get push credentials.
$result = $voxApi->DialogflowCredentials->GetDialogflowKeys($params);

// Show result
var_dump($result);
