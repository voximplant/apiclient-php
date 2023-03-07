<?php

namespace Voximplant\Resources\Params;

class GetACDOperatorStatisticsParams
{
    /** @var timestamp Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss' */
    public $from_date;

    /** @var timestamp Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss' */
    public $to_date;

    /** @var intlist The ACD queue ID list separated by semicolon (;). Use the 'all' value to select all ACD queues */
    public $acd_queue_id;

    /** @var intlist The user ID list separated by semicolon (;). Use the 'all' value to select all users */
    public $user_id;

    /** @var boolean If set to true, key names in returned JSON will be abbreviated to reduce response byte size. The abbreviations are: 'SA' for 'SpeedOfAnswer', 'HT' for 'HandlingTime', 'TT' for 'TalkTime', 'ACW' for 'AfterCallWork', 'TDT' for 'TotalDialingTime', 'THT' for 'TotalHandlingTime', 'TTT' for 'TotalTalkTime', 'TACW' for 'TotalAfterCallWork', 'AC' for 'AnsweredCalls', 'UAC' for 'UnansweredCalls' */
    public $abbreviation;

    /** @var stringlist List of item names abbreviations separated by semicolon (;). Returned JSON will include keys only for the selected items. Special 'all' value defines all possible items, see [ACDOperatorStatisticsType] for a complete list. See 'abbreviation' description for complete abbreviation list */
    public $report;

    /** @var string Specifies how records are grouped by date and time. If set to 'day', the criteria is a day number. If set to 'hour_of_day', the criteria is a 60-minute interval within a day. If set to 'hour', the criteria is both day number and 60-minute interval within that day. If set to 'none', records are not grouped by date and time */
    public $aggregation;

    /** @var string If set to 'user', first-level array in the resulting JSON will group records by the user ID, and second-level array will group them by date according to the 'aggregation' parameter. If set to 'aggregation', first-level array in the resulting JSON will group records according to the 'aggregation' parameter, and second-level array will group them by the user ID */
    public $group;

    public function toArray()
    {
        return [
                'from_date' => $this->from_date,
                    'to_date' => $this->to_date,
                    'acd_queue_id' => $this->acd_queue_id,
                    'user_id' => $this->user_id,
                    'abbreviation' => $this->abbreviation !== null ? (filter_var($this->abbreviation, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'report' => $this->report,
                    'aggregation' => $this->aggregation,
                    'group' => $this->group,
            ];
    }
}
