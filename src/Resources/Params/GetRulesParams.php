<?php

namespace Voximplant\Resources\Params;

class GetRulesParams
{
    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var number The rule ID to filter */
    public $rule_id;

    /** @var string The rule name part to filter */
    public $rule_name;

    /** @var boolean The video conference flag to filter */
    public $video_conference;

    /** @var string Search for template matching */
    public $template;

    /** @var boolean Set true to get bound scenarios info */
    public $with_scenarios;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records will be skipped in the output */
    public $offset;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'rule_id' => $this->rule_id,
                    'rule_name' => $this->rule_name,
                    'video_conference' => $this->video_conference !== null ? (filter_var($this->video_conference, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'template' => $this->template,
                    'with_scenarios' => $this->with_scenarios !== null ? (filter_var($this->with_scenarios, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
