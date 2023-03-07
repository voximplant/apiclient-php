<?php

/**
 * @method SQ_GetSkills Gets the skill(s).
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_GetSkillsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - ID of the application to search by
 * application_name - Name of the application to search by. Can be used instead of application_id
 * user_id - List of user IDs separated by semicolon (;)
 * user_name - List of user names separated by semicolon (;). Can be used instead of user_id
 * sq_skill_id - List of skill IDs separated by semicolon (;)
 * sq_skill_name - List of skill names separated by semicolon (;). Can be used instead of sq_skill_id
 * sq_skill_name_template - Substring of the skill name to filter, case-insensitive
 * excluded_user_id - ID of the user that is not bound to the skill
 * excluded_user_name - Name of the user that is not bound to the skill. Can be used instead of excluded_user_id
 * count - Number of items to show in the output
 * offset - Number of items to skip in the output
 */
$params = new SQ_GetSkillsParams();

$params->application_id = 1;
$params->sq_skill_id = array (
    0 => 2,
    1 => 4,
);

// Get the skills with id 2 and 4
$result = $voxApi->SmartQueue->SQ_GetSkills($params);

// Show result
var_dump($result);
