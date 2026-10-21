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

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * application_id - Application ID to search by. Required unless application_name is provided.
 * application_name - Application name to search by. Required unless application_id is provided.
 * user_id - List of user IDs separated by semicolons (;). Can be used instead of the user_name parameter
 * user_name - List of user names separated by semicolons (;). Can be used instead of the user_id parameter
 * sq_skill_id - List of skill IDs separated by semicolons (;). Can be used instead of the sq_skill_name parameter
 * sq_skill_name - List of skill names separated by semicolons (;). Can be used instead of the sq_skill_id parameter
 * sq_skill_name_template - Substring of the skill name to filter, case-insensitive
 * excluded_user_id - List of user IDs separated by semicolons (;). Skills bound to these users are excluded. Can be used instead of the excluded_user_name parameter
 * excluded_user_name - List of user names separated by semicolons (;). Can be used instead of the excluded_user_id parameter
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
