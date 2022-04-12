<?php

namespace Voximplant\Resources\Params;

class SQ_AddQueueParams
{
    /** @var number ID of the application to bind to */
    public $application_id;

    /** @var string Name of the application to bind to. Can be used instead of application_id */
    public $application_name;

    /** @var string Unique smart queue name within the application, up to 100 characters */
    public $sq_queue_name;

    /** @var [SQAgentSelectionStrategies] Agent selection strategy for calls */
    public $call_agent_selection;

    /** @var [SQAgentSelectionStrategies] Agent selection strategy for messages. Equals to the **call_agent_selection** value by default */
    public $im_agent_selection;

    /** @var [SQTaskSelectionStrategies] Strategy of prioritizing CALL-type requests for service */
    public $call_task_selection;

    /** @var [SQTaskSelectionStrategies] Strategy of prioritizing IM-type requests for service. Equals to the **call_task_selection** value by default */
    public $im_task_selection;

    /** @var string Agent selection strategy, applied when it is not possible to wait for a suitable free agent. Currently not used */
    public $fallback_agent_selection;

    /** @var string Comment, up to 200 characters */
    public $description;

    /** @var number Maximum time in minutes that a CALL-type request can remain in the queue without being assigned to an agent */
    public $call_max_waiting_time;

    /** @var number Maximum time in minutes that an IM-type request can remain in the queue without being assigned to an agent */
    public $im_max_waiting_time;

    /** @var number Maximum size of the queue with CALL-type requests */
    public $call_max_queue_size;

    /** @var number Maximum size of the queue with IM-type requests */
    public $im_max_queue_size;
}
