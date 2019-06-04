<?php

namespace Voximplant\Resources\Params;

class GetACDHistoryParams
{
	/** @var timestamp The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $from_date;

	/** @var timestamp The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $to_date;

	/** @var intlist The ACD session history ID list separated by the ';' symbol. */
	public $acd_session_history_id;

	/** @var stringlist The ACD request ID list separated by the ';' symbol. */
	public $acd_request_id;

	/** @var intlist The ACD queue ID list to filter separated by the ';' symbol. */
	public $acd_queue_id;

	/** @var intlist The user ID list to filter separated by the ';' symbol. */
	public $user_id;

	/** @var boolean Set true to get the calls terminated by the operator. */
	public $operator_hangup;

	/** @var boolean The unserviced calls by the operator. */
	public $unserviced;

	/** @var number The min waiting time filter. */
	public $min_waiting_time;

	/** @var boolean The rejected calls by the 'max_queue_size', 'max_waiting_time' threshold. */
	public $rejected;

	/** @var boolean Set true to get the bound events. */
	public $with_events;

	/** @var boolean Set false to get a CSV file without the column names if the output=csv */
	public $with_header;

	/** @var boolean Set true to get records in the descent order. */
	public $desc_order;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;

	/** @var string The output format. The following values available: json, csv */
	public $output;
}
