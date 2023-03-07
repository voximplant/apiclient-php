<?php

/**
 * @method SetSkillInfo Edits an operator's skill. Works only for ACDv1. For SmartQueue/ACDv2, use <a href="#how-auth-works">this reference</a>.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetSkillInfoParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * skill_id - The skill ID
 * skill_name - The skill name that can be used instead of skill_id
 * new_skill_name - The new skill name. The length must be less than 512
 */
$params = new SetSkillInfoParams();

$params->skill_id = 1;
$params->new_skill_name = 'Support';

// Change the skill name.
$result = $voxApi->Skills->SetSkillInfo($params);

// Show result
var_dump($result);
