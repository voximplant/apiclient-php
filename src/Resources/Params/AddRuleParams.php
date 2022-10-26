<?php

namespace Voximplant\Resources\Params;

class AddRuleParams
{
    /** @var number The application ID */
    public $application_id;

    /** @var string The application name, can be used instead of application_id */
    public $application_name;

    /** @var string The rule name. The length must be less than 100 */
    public $rule_name;

    /** @var string The rule pattern regex. The length must be less than 64 KB */
    public $rule_pattern;

    /** @var string The exclude pattern regex. The length must be less than 64 KB */
    public $rule_pattern_exclude;

    /** @var boolean Video conference is required */
    public $video_conference;

    /** @var intlist The scenario ID list separated by the ';' symbol */
    public $scenario_id;

    /** @var stringlist The scenario name list separated by the ';' symbol. Can be used instead of scenario_id */
    public $scenario_name;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'rule_name' => $this->rule_name,
                    'rule_pattern' => $this->rule_pattern,
                    'rule_pattern_exclude' => $this->rule_pattern_exclude,
                    'video_conference' => $this->video_conference !== null ? (filter_var($this->video_conference, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'scenario_id' => $this->scenario_id,
                    'scenario_name' => $this->scenario_name,
            ];
    }
}
