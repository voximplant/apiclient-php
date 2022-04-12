<?php

namespace Voximplant\Resources\Params;

class SetRuleInfoParams
{
    /** @var number The rule ID */
    public $rule_id;

    /** @var string The new rule name. The length must be less than 100 */
    public $rule_name;

    /** @var string The new rule pattern regex. The length must be less than 64 KB */
    public $rule_pattern;

    /** @var string The new exclude pattern regex. The length must be less than 64 KB */
    public $rule_pattern_exclude;

    /** @var boolean Video conference is required */
    public $video_conference;
}
