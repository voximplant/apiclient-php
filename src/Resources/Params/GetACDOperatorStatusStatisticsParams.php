<?php

namespace Voximplant\Resources\Params;

class GetACDOperatorStatusStatisticsParams
{
    /** @var timestamp Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss' */
    public $from_date;

    /** @var timestamp Date and time of statistics interval begin. Time zone is UTC, format is 24-h 'YYYY-MM-DD HH:mm:ss' */
    public $to_date;

    /** @var stringlist The ACD status list separated by the ';' symbol. The following values are possible: OFFLINE, ONLINE, READY, BANNED, IN_SERVICE, AFTER_SERVICE, TIMEOUT, DND */
    public $acd_status;

    /** @var stringlist The user ID list separated by the ';' symbol. Use the 'all' value to select all users */
    public $user_id;

    /** @var string Specifies how records are grouped by date and time. If set to 'day', the criteria is a day number. If set to 'hour_of_day', the criteria is a 60-minute interval within a day. If set to 'hour', the criteria is both day number and 60-minute interval within that day. If set to 'none', records are not grouped by date and time */
    public $aggregation;

    /** @var string If set to 'user', first-level array in the resulting JSON will group records by the user ID, and second-level array will group them by date according to the 'aggregation' parameter. If set to 'aggregation', first-level array in the resulting JSON will group records according to the 'aggregation' parameter, and second-level array will group them by the user ID */
    public $group;
}
