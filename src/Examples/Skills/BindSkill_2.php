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
 * skill_id - The skill ID list or the 'all' value.
 * acd_queue_id - The ACD queue ID list or the 'all' value.
 * bind - Bind or unbind?
 */
$params = new BindSkillParams();

$params->skill_id = 'all';
$params->acd_queue_id = array (
    0 => 11,
    1 => 12,
);
$params->bind = true;

// Bind the all skill to the queues 11, 12.
$result = $voxApi->Skills->BindSkill($params);

// Show result
var_dump($result);
