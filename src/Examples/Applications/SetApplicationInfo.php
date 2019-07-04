<?php

/**
 * @method SetApplicationInfo Edits the account's application.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetApplicationInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - The application ID.
 * application_name - The new short application name in format [a-z][a-z0-9-]{1,79}
 */
$params = new SetApplicationInfoParams();

$params->application_id = 1;
$params->application_name = 'myapp11';

// Change the application name.
$result = $voxApi->Applications->SetApplicationInfo($params);

// Show result
var_dump($result);
