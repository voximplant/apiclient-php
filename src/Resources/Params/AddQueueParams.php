<?php

namespace Voximplant\Resources\Params;

class AddQueueParams
{
    /** @var number The application ID */
    public $application_id;

    /** @var string The application name that can be used instead of application_id */
    public $application_name;

    /** @var string The queue name. The length must be less than 100 */
    public $acd_queue_name;

    /** @var number The integer queue priority. The highest priority is 0 */
    public $acd_queue_priority;

    /** @var boolean Whether to enable the auto binding of operators to a queue by skills comparing */
    public $auto_binding;

    /** @var number The value in the range of [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue */
    public $service_probability;

    /** @var number The max queue size */
    public $max_queue_size;

    /** @var number The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time */
    public $max_waiting_time;

    /** @var number The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction */
    public $average_service_time;

    public function toArray()
    {
        return [
                'application_id' => $this->application_id,
                    'application_name' => $this->application_name,
                    'acd_queue_name' => $this->acd_queue_name,
                    'acd_queue_priority' => $this->acd_queue_priority,
                    'auto_binding' => $this->auto_binding !== null ? (filter_var($this->auto_binding, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'service_probability' => $this->service_probability,
                    'max_queue_size' => $this->max_queue_size,
                    'max_waiting_time' => $this->max_waiting_time,
                    'average_service_time' => $this->average_service_time,
            ];
    }
}
