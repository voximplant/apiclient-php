<?php

/**
 * @method BindSkill Binds the specified skills to the users (ACD operators) and/or the ACD queues. Works only for ACDv1. For SmartQueue/ACDv2, use <a href="#how-auth-works">this reference</a>.
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
 * skill_id - The skill ID list separated by semicolon (;). Use the 'all' value to select all skills
 * skill_name - The skill name list separated by semicolon (;). Can be used instead of skill_id
 * user_id - The user ID list separated by semicolon (;). Use the 'all' value to select all users
 * user_name - The user name list separated by semicolon (;). user_name can be used instead of user_id
 * acd_queue_id - The ACD queue ID list separated by semicolon (;). Use the 'all' value to select all ACD queues
 * acd_queue_name - The ACD queue name that can be used instead of acd_queue_id. The ACD queue name list separated by semicolon (;)
 * application_id - The application ID. It is required if the user_name is specified
 * application_name - The application name that can be used instead of application_id
 * bind - Bind or unbind (set true or false respectively)
 */
$params = new BindSkillParams();

$params->skill_id = array (
    0 => 1,
    1 => 6,
);
$params->acd_queue_id = array (
    0 => 11,
    1 => 12,
);
$params->user_id = 'all';

// Unbind the skills 1, 6 from the all users and the queues 11, 12.
$result = $voxApi->Skills->BindSkill($params);

// Show result
var_dump($result);
