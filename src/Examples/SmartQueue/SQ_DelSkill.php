<?php

/**
 * @method SQ_DelSkill Deletes a skill and detaches it from agents.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_DelSkillParams;

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
 * sq_skill_id - List of skill IDs separated by semicolons (;). Use 'all' to delete all the skills
 * sq_skill_name - List of skill names separated by semicolons (;). Can be used instead of sq_skill_id
 */
$params = new SQ_DelSkillParams();

$params->application_id = 1;
$params->sq_skill_id = 5;

// Delete the skill with id = 5.
$result = $voxApi->SmartQueue->SQ_DelSkill($params);

// Show result
var_dump($result);
