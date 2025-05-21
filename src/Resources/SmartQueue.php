<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\GetSQStateReturn;
use Voximplant\Interfaces\GetSmartQueueDayHistoryReturn;
use Voximplant\Interfaces\GetSmartQueueRealtimeMetricsReturn;
use Voximplant\Interfaces\RequestSmartQueueHistoryReturn;
use Voximplant\Interfaces\SQ_AddQueueReturn;
use Voximplant\Interfaces\SQ_AddSkillReturn;
use Voximplant\Interfaces\SQ_BindAgentReturn;
use Voximplant\Interfaces\SQ_BindSkillReturn;
use Voximplant\Interfaces\SQ_DelQueueReturn;
use Voximplant\Interfaces\SQ_DelSkillReturn;
use Voximplant\Interfaces\SQ_DeleteAgentCustomStatusMappingReturn;
use Voximplant\Interfaces\SQ_GetAgentCustomStatusMappingReturn;
use Voximplant\Interfaces\SQ_GetAgentsReturn;
use Voximplant\Interfaces\SQ_GetQueuesReturn;
use Voximplant\Interfaces\SQ_GetSkillsReturn;
use Voximplant\Interfaces\SQ_SetAgentCustomStatusMappingReturn;
use Voximplant\Interfaces\SQ_SetAgentInfoReturn;
use Voximplant\Interfaces\SQ_SetQueueInfoReturn;
use Voximplant\Interfaces\SQ_SetSkillInfoReturn;
use Voximplant\Interfaces\SQ_UnbindAgentReturn;
use Voximplant\Interfaces\SQ_UnbindSkillReturn;
use Voximplant\Interfaces\SmartQueueInterface;

class SmartQueue implements SmartQueueInterface
{
    protected $client;

    /** @object GetSmartQueueRealtimeMetrics */
    protected $GetSmartQueueRealtimeMetricsReturn;

    /** @object GetSmartQueueDayHistory */
    protected $GetSmartQueueDayHistoryReturn;

    /** @object RequestSmartQueueHistory */
    protected $RequestSmartQueueHistoryReturn;

    /** @object GetSQState */
    protected $GetSQStateReturn;

    /** @object SQ_SetAgentCustomStatusMapping */
    protected $SQ_SetAgentCustomStatusMappingReturn;

    /** @object SQ_GetAgentCustomStatusMapping */
    protected $SQ_GetAgentCustomStatusMappingReturn;

    /** @object SQ_DeleteAgentCustomStatusMapping */
    protected $SQ_DeleteAgentCustomStatusMappingReturn;

    /** @object SQ_AddQueue */
    protected $SQ_AddQueueReturn;

    /** @object SQ_SetQueueInfo */
    protected $SQ_SetQueueInfoReturn;

    /** @object SQ_DelQueue */
    protected $SQ_DelQueueReturn;

    /** @object SQ_GetQueues */
    protected $SQ_GetQueuesReturn;

    /** @object SQ_AddSkill */
    protected $SQ_AddSkillReturn;

    /** @object SQ_DelSkill */
    protected $SQ_DelSkillReturn;

    /** @object SQ_SetSkillInfo */
    protected $SQ_SetSkillInfoReturn;

    /** @object SQ_BindSkill */
    protected $SQ_BindSkillReturn;

    /** @object SQ_UnbindSkill */
    protected $SQ_UnbindSkillReturn;

    /** @object SQ_GetSkills */
    protected $SQ_GetSkillsReturn;

    /** @object SQ_BindAgent */
    protected $SQ_BindAgentReturn;

    /** @object SQ_UnbindAgent */
    protected $SQ_UnbindAgentReturn;

    /** @object SQ_GetAgents */
    protected $SQ_GetAgentsReturn;

    /** @object SQ_SetAgentInfo */
    protected $SQ_SetAgentInfoReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetSmartQueueRealtimeMetricsReturn = new GetSmartQueueRealtimeMetricsReturn();
        $this->GetSmartQueueDayHistoryReturn = new GetSmartQueueDayHistoryReturn();
        $this->RequestSmartQueueHistoryReturn = new RequestSmartQueueHistoryReturn();
        $this->GetSQStateReturn = new GetSQStateReturn();
        $this->SQ_SetAgentCustomStatusMappingReturn = new SQ_SetAgentCustomStatusMappingReturn();
        $this->SQ_GetAgentCustomStatusMappingReturn = new SQ_GetAgentCustomStatusMappingReturn();
        $this->SQ_DeleteAgentCustomStatusMappingReturn = new SQ_DeleteAgentCustomStatusMappingReturn();
        $this->SQ_AddQueueReturn = new SQ_AddQueueReturn();
        $this->SQ_SetQueueInfoReturn = new SQ_SetQueueInfoReturn();
        $this->SQ_DelQueueReturn = new SQ_DelQueueReturn();
        $this->SQ_GetQueuesReturn = new SQ_GetQueuesReturn();
        $this->SQ_AddSkillReturn = new SQ_AddSkillReturn();
        $this->SQ_DelSkillReturn = new SQ_DelSkillReturn();
        $this->SQ_SetSkillInfoReturn = new SQ_SetSkillInfoReturn();
        $this->SQ_BindSkillReturn = new SQ_BindSkillReturn();
        $this->SQ_UnbindSkillReturn = new SQ_UnbindSkillReturn();
        $this->SQ_GetSkillsReturn = new SQ_GetSkillsReturn();
        $this->SQ_BindAgentReturn = new SQ_BindAgentReturn();
        $this->SQ_UnbindAgentReturn = new SQ_UnbindAgentReturn();
        $this->SQ_GetAgentsReturn = new SQ_GetAgentsReturn();
        $this->SQ_SetAgentInfoReturn = new SQ_SetAgentInfoReturn();
    }

    /**
     * @method Gets the metrics for the specified SmartQueue for the last 30 minutes. Refer to the SmartQueue reporting guide to learn more.
     */
    public function GetSmartQueueRealtimeMetrics(Params\GetSmartQueueRealtimeMetricsParams $params = null): GetSmartQueueRealtimeMetricsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSmartQueueRealtimeMetricsReturn->$key = $value;
        }
        return $this->GetSmartQueueRealtimeMetricsReturn;
    }

    /**
     * @method Gets the metrics for the specified SmartQueue for the last 2 days. Refer to the SmartQueue reporting guide to learn more.
     */
    public function GetSmartQueueDayHistory(Params\GetSmartQueueDayHistoryParams $params = null): GetSmartQueueDayHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSmartQueueDayHistoryReturn->$key = $value;
        }
        return $this->GetSmartQueueDayHistoryReturn;
    }

    /**
     * @method Gets history for the specified SmartQueue. Refer to the SmartQueue reporting guide to learn more.
     */
    public function RequestSmartQueueHistory(Params\RequestSmartQueueHistoryParams $params = null): RequestSmartQueueHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->RequestSmartQueueHistoryReturn->$key = $value;
        }
        return $this->RequestSmartQueueHistoryReturn;
    }

    /**
     * @method Gets the current state of the specified SmartQueue.
     */
    public function GetSQState(Params\GetSQStateParams $params = null): GetSQStateReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSQStateReturn->$key = $value;
        }
        return $this->GetSQStateReturn;
    }

    /**
     * @method Adds a status if there is no match for the given internal status and renames it if there is a match. It means that if the passed **sq_status_name** parameter is not in the mapping table, a new entry is created in there; if it is, the **name** field in its mapping is replaced with **custom_status_name**.
     */
    public function SQ_SetAgentCustomStatusMapping(Params\SQ_SetAgentCustomStatusMappingParams $params = null): SQ_SetAgentCustomStatusMappingReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_SetAgentCustomStatusMappingReturn->$key = $value;
        }
        return $this->SQ_SetAgentCustomStatusMappingReturn;
    }

    /**
     * @method Returns the mapping list of SQ statuses and custom statuses. SQ statuses are returned whether they have mappings to custom statuses.
     */
    public function SQ_GetAgentCustomStatusMapping(Params\SQ_GetAgentCustomStatusMappingParams $params = null): SQ_GetAgentCustomStatusMappingReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_GetAgentCustomStatusMappingReturn->$key = $value;
        }
        return $this->SQ_GetAgentCustomStatusMappingReturn;
    }

    /**
     * @method Removes a mapping from the mapping table. If there is no such mapping, does nothing.
     */
    public function SQ_DeleteAgentCustomStatusMapping(Params\SQ_DeleteAgentCustomStatusMappingParams $params = null): SQ_DeleteAgentCustomStatusMappingReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_DeleteAgentCustomStatusMappingReturn->$key = $value;
        }
        return $this->SQ_DeleteAgentCustomStatusMappingReturn;
    }

    /**
     * @method Adds a new queue.
     */
    public function SQ_AddQueue(Params\SQ_AddQueueParams $params = null): SQ_AddQueueReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_AddQueueReturn->$key = $value;
        }
        return $this->SQ_AddQueueReturn;
    }

    /**
     * @method Edits an existing queue.
     */
    public function SQ_SetQueueInfo(Params\SQ_SetQueueInfoParams $params = null): SQ_SetQueueInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_SetQueueInfoReturn->$key = $value;
        }
        return $this->SQ_SetQueueInfoReturn;
    }

    /**
     * @method Deletes a queue.
     */
    public function SQ_DelQueue(Params\SQ_DelQueueParams $params = null): SQ_DelQueueReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_DelQueueReturn->$key = $value;
        }
        return $this->SQ_DelQueueReturn;
    }

    /**
     * @method Gets the queue(s).
     */
    public function SQ_GetQueues(Params\SQ_GetQueuesParams $params = null): SQ_GetQueuesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_GetQueuesReturn->$key = $value;
        }
        return $this->SQ_GetQueuesReturn;
    }

    /**
     * @method Adds a new skill to the app.
     */
    public function SQ_AddSkill(Params\SQ_AddSkillParams $params = null): SQ_AddSkillReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_AddSkillReturn->$key = $value;
        }
        return $this->SQ_AddSkillReturn;
    }

    /**
     * @method Deletes a skill and detaches it from agents.
     */
    public function SQ_DelSkill(Params\SQ_DelSkillParams $params = null): SQ_DelSkillReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_DelSkillReturn->$key = $value;
        }
        return $this->SQ_DelSkillReturn;
    }

    /**
     * @method Edits an existing skill.
     */
    public function SQ_SetSkillInfo(Params\SQ_SetSkillInfoParams $params = null): SQ_SetSkillInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_SetSkillInfoReturn->$key = $value;
        }
        return $this->SQ_SetSkillInfoReturn;
    }

    /**
     * @method Binds skills to agents.
     */
    public function SQ_BindSkill(Params\SQ_BindSkillParams $params = null): SQ_BindSkillReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_BindSkillReturn->$key = $value;
        }
        return $this->SQ_BindSkillReturn;
    }

    /**
     * @method Unbinds skills from agents.
     */
    public function SQ_UnbindSkill(Params\SQ_UnbindSkillParams $params = null): SQ_UnbindSkillReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_UnbindSkillReturn->$key = $value;
        }
        return $this->SQ_UnbindSkillReturn;
    }

    /**
     * @method Gets the skill(s).
     */
    public function SQ_GetSkills(Params\SQ_GetSkillsParams $params = null): SQ_GetSkillsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_GetSkillsReturn->$key = $value;
        }
        return $this->SQ_GetSkillsReturn;
    }

    /**
     * @method Binds agents to a queue.
     */
    public function SQ_BindAgent(Params\SQ_BindAgentParams $params = null): SQ_BindAgentReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_BindAgentReturn->$key = $value;
        }
        return $this->SQ_BindAgentReturn;
    }

    /**
     * @method Unbinds agents from queues.
     */
    public function SQ_UnbindAgent(Params\SQ_UnbindAgentParams $params = null): SQ_UnbindAgentReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_UnbindAgentReturn->$key = $value;
        }
        return $this->SQ_UnbindAgentReturn;
    }

    /**
     * @method Gets agents.
     */
    public function SQ_GetAgents(Params\SQ_GetAgentsParams $params = null): SQ_GetAgentsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_GetAgentsReturn->$key = $value;
        }
        return $this->SQ_GetAgentsReturn;
    }

    /**
     * @method Edits the agent settings.
     */
    public function SQ_SetAgentInfo(Params\SQ_SetAgentInfoParams $params = null): SQ_SetAgentInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SQ_SetAgentInfoReturn->$key = $value;
        }
        return $this->SQ_SetAgentInfoReturn;
    }
}
