<?php

namespace Voximplant\Interfaces;

interface RulesInterface
{
    /**
     * @method Adds a new rule for the application.
     */
    public function AddRule(\Voximplant\Resources\Params\AddRuleParams $params);

    /**
     * @method Deletes the rule.
     */
    public function DelRule(\Voximplant\Resources\Params\DelRuleParams $params);

    /**
     * @method Edits the rule.
     */
    public function SetRuleInfo(\Voximplant\Resources\Params\SetRuleInfoParams $params);

    /**
     * @method Gets the rules.
     */
    public function GetRules(\Voximplant\Resources\Params\GetRulesParams $params);

    /**
     * @method Configures the rules' order in the <a href='//manage.voximplant.com/applications'>Applications</a> section of Control panel. Note: the rules must belong to the same application!
     */
    public function ReorderRules(\Voximplant\Resources\Params\ReorderRulesParams $params);
}
class AddRuleReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The new rule ID */
    public $rule_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelRuleReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetRuleInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetRulesReturn
{
    /** @var [RuleInfoType] */
    public $result;

    /** @var number The total found rule count */
    public $total_count;

    /** @var number The returned rule count */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class ReorderRulesReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
