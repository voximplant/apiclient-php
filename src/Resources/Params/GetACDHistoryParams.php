<?php

namespace Voximplant\Resources\Params;

class GetACDHistoryParams
{
    /** @var timestamp The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $from_date;

    /** @var timestamp The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $to_date;

    /** @var intlist The ACD session history ID list separated by semicolons (;) */
    public $acd_session_history_id;

    /** @var stringlist The ACD request ID list separated by semicolons (;) */
    public $acd_request_id;

    /** @var intlist The ACD queue ID list to filter separated by semicolons (;) */
    public $acd_queue_id;

    /** @var intlist The user ID list to filter separated by semicolons (;) */
    public $user_id;

    /** @var boolean Whether to get the calls terminated by the operator */
    public $operator_hangup;

    /** @var boolean Whether the call is unserviced by the operator */
    public $unserviced;

    /** @var number The min waiting time filter */
    public $min_waiting_time;

    /** @var boolean Whether the call is rejected calls by the 'max_queue_size', 'max_waiting_time' threshold */
    public $rejected;

    /** @var boolean Whether to get the bound events */
    public $with_events;

    /** @var boolean Whether to get a CSV file with the column names if the output=csv */
    public $with_header;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    /** @var string The output format. The following values available: **json**, **csv**, **xls**. The default value is **json** */
    public $output;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'acd_session_history_id' => $this->acd_session_history_id,
                    'acd_request_id' => $this->acd_request_id,
                    'acd_queue_id' => $this->acd_queue_id,
                    'user_id' => $this->user_id,
                    'operator_hangup' => $this->operator_hangup !== null ? (filter_var($this->operator_hangup, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'unserviced' => $this->unserviced !== null ? (filter_var($this->unserviced, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'min_waiting_time' => $this->min_waiting_time,
                    'rejected' => $this->rejected !== null ? (filter_var($this->rejected, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_events' => $this->with_events !== null ? (filter_var($this->with_events, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'with_header' => $this->with_header !== null ? (filter_var($this->with_header, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
                    'output' => $this->output,
            ];
    }
}
