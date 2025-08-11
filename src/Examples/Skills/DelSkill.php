<?php

/**
 * @method DelSkill Deletes an operator's skill. Works only for ACDv1. For SmartQueue/ACDv2, use <a href="#how-auth-works">this reference</a>.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\DelSkillParams;

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
 * skill_id - The skill ID
 * skill_name - The skill name that can be used instead of skill_id
 */
$params = new DelSkillParams();

$params->skill_id = 1;

// Delete the skill 1.
$result = $voxApi->Skills->DelSkill($params);

// Show result
var_dump($result);
