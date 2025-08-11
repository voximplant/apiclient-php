<?php

/**
 * @method SQ_SetSkillInfo Edits an existing skill.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_SetSkillInfoParams;

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
 * application_id - ID of the application to search by
 * application_name - Name of the application to search by. Can be used instead of application_id
 * sq_skill_id - ID of the skill
 * sq_skill_name - Name of the skill. Can be used instead of sq_skill_id
 * new_sq_skill_name - New unique skill name within the application
 * description - Comment, up to 200 characters
 */
$params = new SQ_SetSkillInfoParams();

$params->application_id = 1;
$params->sq_skill_id = 1;
$params->new_sq_skill_name = 'newSkill';

// Edit a skill.
$result = $voxApi->SmartQueue->SQ_SetSkillInfo($params);

// Show result
var_dump($result);
