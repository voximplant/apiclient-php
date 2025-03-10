<?php

/**
 * @method SQ_BindSkill Binds skills to agents.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_BindSkillParams;

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
 * user_id - List of user IDs separated by semicolons (;). Use 'all' to select all the users
 * user_name - List of user names separated by semicolons (;). Can be used instead of user_id
 * sq_skills - Skills to be bound to agents in the json array format. The array should contain objects with the sq_skill_id/sq_skill_name and sq_skill_level keys where skill levels range from 1 to 5
 * bind_mode - Binding mode. Accepts one of the [SQSkillBindingModes] enum values
 */
$params = new SQ_BindSkillParams();

$params->application_id = 1;
$params->user_id = 'all';
$params->sq_skills = '[{"sq_skill_id":1,"sq_skill_level":1},{"sq_skill_id":2,"sq_skill_level":5}]';

// Bind the skills with id 1 and 2 to all users.
$result = $voxApi->SmartQueue->SQ_BindSkill($params);

// Show result
var_dump($result);
