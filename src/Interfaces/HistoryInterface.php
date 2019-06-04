<?php

namespace Voximplant\Interfaces;

interface HistoryInterface
{
	/**
	 * @method Gets the call history.
	 */
	public function GetCallHistory(\Voximplant\Resources\Params\GetCallHistoryParams $params);


	/**
	 * @method Gets the list of history reports and their statuses. The method returns info about reports made via [GetCallHistory] with the specified __output=csv__ and **is_async=true** parameters.
	 */
	public function GetHistoryReports(\Voximplant\Resources\Params\GetHistoryReportsParams $params);


	/**
	 * @method Downloads the required history report.
	 */
	public function DownloadHistoryReport(\Voximplant\Resources\Params\DownloadHistoryReportParams $params);


	/**
	 * @method Gets the transaction history.
	 */
	public function GetTransactionHistory(\Voximplant\Resources\Params\GetTransactionHistoryParams $params);


	/**
	 * @method Try to remove record and transcription files.
	 */
	public function DeleteRecord(\Voximplant\Resources\Params\DeleteRecordParams $params);


	/**
	 * @method Gets the ACD history.
	 */
	public function GetACDHistory(\Voximplant\Resources\Params\GetACDHistoryParams $params);


	/**
	 * @method Gets the history of account changes.
	 */
	public function GetAuditLog(\Voximplant\Resources\Params\GetAuditLogParams $params);
}
class GetCallHistoryReturn
{
	/** @var [CallSessionInfoType] The CallSessionInfoType records in sync mode or 1 in async mode. */
	public $result;

	/** @var number The total found call session count (sync mode). */
	public $total_count;

	/** @var number The returned call session count (sync mode). */
	public $count;

	/** @var string The used timezone. */
	public $timezone;

	/** @var number The history report ID (async mode). */
	public $history_report_id;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetHistoryReportsReturn
{
	/** @var [HistoryReportType] */
	public $result;

	/** @var number The total found reports count. */
	public $total_count;

	/** @var number The returned reports count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DownloadHistoryReportReturn
{
	/** @var unknown See the HTTP Content-Type header instead. */
	public $unknown;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetTransactionHistoryReturn
{
	/** @var [TransactionInfoType] */
	public $result;

	/** @var decimal The committed balance on the date equals from_date value. The parameter value is the number rounded to 4 decimal places and displays in the currency specified for the account. */
	public $end_balance;

	/** @var number The total found transaction count. */
	public $total_count;

	/** @var string The used timezone. 'Etc/GMT' for example. */
	public $timezone;

	/** @var number The returned transaction count. */
	public $count;

	/** @var decimal The committed balance on the date equals to_date value. The parameter value is the number rounded to 4 decimal places and displays in the currency specified for the account. */
	public $start_balance;

	/** @var number The history report ID (async mode). */
	public $history_report_id;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DeleteRecordReturn
{
	/** @var number */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetACDHistoryReturn
{
	/** @var [ACDSessionInfoType] */
	public $result;

	/** @var number The total found ACD session count. */
	public $total_count;

	/** @var number The returned ACD session count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetAuditLogReturn
{
	/** @var [AuditLogInfoType] */
	public $result;

	/** @var number The total found item count. */
	public $total_count;

	/** @var number The returned item count. */
	public $count;

	/** @var string The used timezone. */
	public $timezone;

	/** @var number The history report ID (async mode). */
	public $history_report_id;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
