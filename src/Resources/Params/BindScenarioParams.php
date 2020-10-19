<?php

namespace Voximplant\Resources\Params;

class BindScenarioParams
{
    /** @var intlist The scenario ID list separated by the ';' symbol. */
    public $scenario_id;

    /** @var stringlist The scenario name list separated by the ';' symbol. Can be used instead of scenario_id. */
    public $scenario_name;

    /** @var number The rule ID. */
    public $rule_id;

    /** @var string The rule name that can be used instead of rule_id. */
    public $rule_name;

    /** @var number The application ID. */
    public $application_id;

    /** @var string The application name that can be used instead of application_id. */
    public $application_name;

    /** @var boolean Bind or unbind (set true or false respectively). */
    public $bind;
}
