<?php

namespace Voximplant\Interfaces;

interface SmartQueueInterface
{
    /**
     * @method Gets the metrics for the specified SmartQueue for the last 30 minutes. Refer to the <a href="/docs/guides/contact-center/reporting">SmartQueue reporting guide</a> to learn more.
     */
    public function GetSmartQueueRealtimeMetrics(\Voximplant\Resources\Params\GetSmartQueueRealtimeMetricsParams $params);

    /**
     * @method Gets the metrics for the specified SmartQueue for the last 2 days. Refer to the <a href="/docs/guides/contact-center/reporting">SmartQueue reporting guide</a> to learn more.
     */
    public function GetSmartQueueDayHistory(\Voximplant\Resources\Params\GetSmartQueueDayHistoryParams $params);

    /**
     * @method Gets history for the specified SmartQueue. Refer to the <a href="/docs/guides/contact-center/reporting">SmartQueue reporting guide</a> to learn more.
     */
    public function RequestSmartQueueHistory(\Voximplant\Resources\Params\RequestSmartQueueHistoryParams $params);

    /**
     * @method Gets the current state of the specified SmartQueue.
     */
    public function GetSQState(\Voximplant\Resources\Params\GetSQStateParams $params);

    /**
     * @method Adds a status if there is no match for the given internal status and renames it if there is a match. It means that if the passed **sq_status_name** parameter is not in the mapping table, a new entry is created in there; if it is, the **name** field in its mapping is replaced with **custom_status_name**.
     */
    public function SQ_SetAgentCustomStatusMapping(\Voximplant\Resources\Params\SQ_SetAgentCustomStatusMappingParams $params);

    /**
     * @method Returns the mapping list of SQ statuses and custom statuses. SQ statuses are returned whether or not they have mappings to custom statuses.
     */
    public function SQ_GetAgentCustomStatusMapping(\Voximplant\Resources\Params\SQ_GetAgentCustomStatusMappingParams $params);

    /**
     * @method Removes a mapping from the mapping table. If there is no such mapping, does nothing.
     */
    public function SQ_DeleteAgentCustomStatusMapping(\Voximplant\Resources\Params\SQ_DeleteAgentCustomStatusMappingParams $params);

    /**
     * @method Adds a new queue.
     */
    public function SQ_AddQueue(\Voximplant\Resources\Params\SQ_AddQueueParams $params);

    /**
     * @method Edits an existing queue.
     */
    public function SQ_SetQueueInfo(\Voximplant\Resources\Params\SQ_SetQueueInfoParams $params);

    /**
     * @method Deletes a queue.
     */
    public function SQ_DelQueue(\Voximplant\Resources\Params\SQ_DelQueueParams $params);

    /**
     * @method Gets the queue(s).
     */
    public function SQ_GetQueues(\Voximplant\Resources\Params\SQ_GetQueuesParams $params);

    /**
     * @method Adds a new skill to the app.
     */
    public function SQ_AddSkill(\Voximplant\Resources\Params\SQ_AddSkillParams $params);

    /**
     * @method Deletes a skill and detaches it from agents.
     */
    public function SQ_DelSkill(\Voximplant\Resources\Params\SQ_DelSkillParams $params);

    /**
     * @method Edits an existing skill.
     */
    public function SQ_SetSkillInfo(\Voximplant\Resources\Params\SQ_SetSkillInfoParams $params);

    /**
     * @method Binds skills to agents.
     */
    public function SQ_BindSkill(\Voximplant\Resources\Params\SQ_BindSkillParams $params);

    /**
     * @method Unbinds skills from agents.
     */
    public function SQ_UnbindSkill(\Voximplant\Resources\Params\SQ_UnbindSkillParams $params);

    /**
     * @method Gets the skill(s).
     */
    public function SQ_GetSkills(\Voximplant\Resources\Params\SQ_GetSkillsParams $params);

    /**
     * @method Binds agents to a queue.
     */
    public function SQ_BindAgent(\Voximplant\Resources\Params\SQ_BindAgentParams $params);

    /**
     * @method Unbinds agents from queues.
     */
    public function SQ_UnbindAgent(\Voximplant\Resources\Params\SQ_UnbindAgentParams $params);

    /**
     * @method Gets agents.
     */
    public function SQ_GetAgents(\Voximplant\Resources\Params\SQ_GetAgentsParams $params);

    /**
     * @method Edits the agent settings.
     */
    public function SQ_SetAgentInfo(\Voximplant\Resources\Params\SQ_SetAgentInfoParams $params);
}
class GetSmartQueueRealtimeMetricsReturn
{
    /** @var [SmartQueueMetricsResult] */
    public $result;

    /** @var string The used timezone, e.g., 'Etc/GMT' */
    public $timezone;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetSmartQueueDayHistoryReturn
{
    /** @var [SmartQueueMetricsResult] */
    public $result;

    /** @var string The used timezone, e.g., 'Etc/GMT' */
    public $timezone;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class RequestSmartQueueHistoryReturn
{
    /** @var number 1 */
    public $result;

    /** @var number History report ID */
    public $history_report_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetSQStateReturn
{
    /** @var [SmartQueueState] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_SetAgentCustomStatusMappingReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_GetAgentCustomStatusMappingReturn
{
    /** @var string Status name */
    public $sq_status_name;

    /** @var string Custom status name */
    public $custom_status_name;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_DeleteAgentCustomStatusMappingReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_AddQueueReturn
{
    /** @var SQAddQueueResult Result with ID of the added queue */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_SetQueueInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_DelQueueReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_GetQueuesReturn
{
    /** @var GetSQQueuesResult The found queue(s) */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_AddSkillReturn
{
    /** @var SQAddSkillResult Result with ID of the added skill */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_DelSkillReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_SetSkillInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_BindSkillReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_UnbindSkillReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_GetSkillsReturn
{
    /** @var GetSQSkillsResult The found skill(s). */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_BindAgentReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_UnbindAgentReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_GetAgentsReturn
{
    /** @var GetSQAgentsResult The found agent(s) */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SQ_SetAgentInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
