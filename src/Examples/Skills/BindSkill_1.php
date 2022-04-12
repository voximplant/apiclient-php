<?php

/**
 * @method BindSkill Binds the specified skills to the users (ACD operators) and/or the ACD queues.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\BindSkillParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * skill_id - The skill ID list. Use the 'all' value to select all skills
 * skill_name - The skill name list. Can be used instead of skill_id
 * user_id - The user ID list. Use the 'all' value to select all users
 * user_name - The user name list. user_name can be used instead of user_id
 * acd_queue_id - The ACD queue ID list. Use the 'all' value to select all ACD queues
 * acd_queue_name - The ACD queue name that can be used instead of acd_queue_id. The ACD queue name list
 * application_id - The application ID. It is required if the user_name is specified
 * application_name - The application name that can be used instead of application_id
 * bind - Bind or unbind (set true or false respectively)
 */
$params = new BindSkillParams();

$params->skill_id = array (
    0 => 1,
    1 => 3,
);
$params->user_id = array (
    0 => 5,
    1 => 6,
    2 => 10,
);

// Bind the skills 1, 5 to the users 5, 6, 10.
$result = $voxApi->Skills->BindSkill($params);

// Show result
var_dump($result);
