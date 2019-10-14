<?php

namespace Voximplant\Resources\Params;

class GetCallListsParams
{
	/** @var intlist The list ID to filter. Can be a list separated by the ';' symbol or the 'all' value. */
	public $list_id;

	/** @var string Find call lists by name */
	public $name;

	/** @var boolean Find only active call lists */
	public $is_active;

	/** @var timestamp The UTC 'from' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $from_date;

	/** @var timestamp The UTC 'to' date filter in 24-h format: YYYY-MM-DD HH:mm:ss */
	public $to_date;

	/** @var string The type of call list. Available values: AUTOMATIC and MANUAL */
	public $type_list;

	/** @var number The max returning record count. */
	public $count;

	/** @var number The first N records will be skipped in the output. */
	public $offset;

	/** @var intlist The application ID to filter. Can be a list separated by the ';' symbol or the 'all' value. */
	public $application_id;
}
