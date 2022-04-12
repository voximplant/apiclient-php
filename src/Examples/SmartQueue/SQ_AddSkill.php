<?php

/**
 * @method SQ_AddSkill Adds a new skill to the app.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SQ_AddSkillParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * application_id - ID of the application to bind to
 * application_name - Name of the application to bind to. Can be used instead of application_id
 * sq_skill_name - Unique skill name within the application
 * description - Comment, up to 200 characters
 */
$params = new SQ_AddSkillParams();

$params->application_id = 1;
$params->sq_skill_name = 'mySkill';

// Add a new skill.
$result = $voxApi->SmartQueue->SQ_AddSkill($params);

// Show result
var_dump($result);
