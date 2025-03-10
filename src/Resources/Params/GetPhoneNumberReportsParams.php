<?php

namespace Voximplant\Resources\Params;

class GetPhoneNumberReportsParams
{
    /** @var number The phone number report ID to filter */
    public $report_id;

    /** @var stringlist The phone number report type list separated by semicolons (;). Use the 'all' value to select all history report types. The following values are possible: calls, calls_brief, transactions, audit, call_list, transactions_on_hold */
    public $report_type;

    /** @var timestamp The UTC creation from date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $created_from;

    /** @var timestamp The UTC creation to date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
    public $created_to;

    /** @var boolean Whether the report is completed */
    public $is_completed;

    /** @var boolean Whether to get records in the descent order */
    public $desc_order;

    /** @var number The max returning record count */
    public $count;

    /** @var number The first N records are skipped in the output */
    public $offset;

    public function toArray()
    {
        return [
                'report_id' => $this->report_id,
                    'report_type' => $this->report_type,
                    'created_from' => $this->created_from,
                    'created_to' => $this->created_to,
                    'is_completed' => $this->is_completed !== null ? (filter_var($this->is_completed, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'desc_order' => $this->desc_order !== null ? (filter_var($this->desc_order, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'count' => $this->count,
                    'offset' => $this->offset,
            ];
    }
}
