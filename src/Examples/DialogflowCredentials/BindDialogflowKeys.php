<?php

/**
 * @method BindDialogflowKeys Bind a Dialogflow key to the specified applications
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\BindDialogflowKeysParams;

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
 * application_id - The application ID list or the 'all' value.
 * bind - Set to false to unbind. Default value is true.
 */
$params = new BindDialogflowKeysParams();

$params->dialogflow_key_id = 1;
$params->application_id = 1;

// Bind a Dialogflow key to the application.
$result = $voxApi->DialogflowCredentials->BindDialogflowKeys($params);

// Show result
var_dump($result);
