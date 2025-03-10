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

    /** @var boolean Whether video conference is required */
    public $video_conference;

    /** @var string The service account ID to bind to the rule. Read more in the [guide](/docs/guides/voxengine/management-api) */
    public $bind_key_id;

    public function toArray()
    {
        return [
                'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'rule_pattern' => $this->rule_pattern,
                    'rule_pattern_exclude' => $this->rule_pattern_exclude,
                    'video_conference' => $this->video_conference !== null ? (filter_var($this->video_conference, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'bind_key_id' => $this->bind_key_id,
            ];
    }
}
