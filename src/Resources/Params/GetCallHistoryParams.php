<?php

namespace Voximplant\Resources\Params;

class GetCallHistoryParams
{
	/** @var timestamp The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $from_date;

	/** @var timestamp The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $to_date;

	/** @var intlist The call session history ID list separated by the ';' symbol. The sessions IDs can be accessed in JS scenario via the sessionID property of the AppEvents.Started event */
	public $call_session_history_id;

	/** @var number The application ID. */
	public $application_id;

	/** @var string The application name, can be used instead of application_id. */
	public $application_name;

	/** @var intlist The user ID list separated by the ';' symbol. If it's specified the output will contain only calls from/to any VoxImplant SDK related to the specified user. */
	public $user_id;

	/** @var string The rule name to filter. */
	public $rule_name;

	/** @var stringlist The remote number list separated by the ';' symbol. */
	public $remote_number;

	/** @var stringlist The local number list separated by the ';' symbol. */
	public $local_number;

	/** @var string The custom_data to filter sessions. */
	public $call_session_history_custom_data;

	/** @var boolean Set true to get the bound calls. */
	public $with_calls;

	/** @var boolean Set true to get the bound records. */
	public $with_records;

	/** @var boolean Set true to get other resources usage (see [ResourceUsageType]). */
	public $with_other_resources;

	/** @var intlist The child account ID list separated by the ';' symbol or the 'all' value. */
	public $child_account_id;

	/** @var boolean Set true to get the children account calls only. */
	public $children_calls_only;

	/** @var boolean Set false to get a CSV file without the column names if the output=csv */
	public $with_header;

	/** @var boolean Set true to get records in the descent order. */
	public $desc_order;

	/** @var boolean Set false to omit the 'total_count' and increase performance. */
	public $with_total_count;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;

	/** @var string The output format. The following values available: json, csv. */
	public $output;

	/** @var boolean Set true to get records in the asynchronous mode (for csv output only). If it's true, the request could be available via GetHistoryReports and DownloadHistoryReport methods. */
	public $is_async;
}
