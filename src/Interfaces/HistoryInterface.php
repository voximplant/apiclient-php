<?php

namespace Voximplant\Interfaces;

interface HistoryInterface
{
    /**
     * @method Gets the account's call history, including call duration, cost, logs and other call information. You can filter the call history by a certain date
     */
    public function GetCallHistory(\Voximplant\Resources\Params\GetCallHistoryParams $params);

    /**
     * @method Gets the account's brief call history. Use the [GetHistoryReports], [DownloadHistoryReport] methods to download the report.
     */
    public function GetBriefCallHistory(\Voximplant\Resources\Params\GetBriefCallHistoryParams $params);

    /**
     * @method Gets the list of history reports and their statuses. The method returns info about reports made via [GetCallHistory] with the specified __output=csv__ and **is_async=true** parameters. Note that the **file_size** field in response is valid only for video calls.
     */
    public function GetHistoryReports(\Voximplant\Resources\Params\GetHistoryReportsParams $params);

    /**
     * @method Gets the transaction history.
     */
    public function GetTransactionHistory(\Voximplant\Resources\Params\GetTransactionHistoryParams $params);

    /**
     * @method Try to remove a record and transcription files.
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
    /** @var [CallSessionInfoType] The CallSessionInfoType records in sync mode or 1 in async mode */
    public $result;

    /** @var number The total found call session count (sync mode) */
    public $total_count;

    /** @var number The returned call session count (sync mode) */
    public $count;

    /** @var string The used timezone */
    public $timezone;

    /** @var number The history report ID (async mode) */
    public $history_report_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetBriefCallHistoryReturn
{
    /** @var number In the async mode, the value is always 1 */
    public $result;

    /** @var number The history report ID */
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

    /** @var number The total found reports count */
    public $total_count;

    /** @var number The returned reports count */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetTransactionHistoryReturn
{
    /** @var [TransactionInfoType] */
    public $result;

    /** @var number The total found transaction count */
    public $total_count;

    /** @var string The used timezone. 'Etc/GMT' for example */
    public $timezone;

    /** @var number The returned transaction count */
    public $count;

    /** @var number The history report ID (async mode) */
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

    /** @var number The total found ACD session count */
    public $total_count;

    /** @var number The returned ACD session count */
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

    /** @var number The total found item count */
    public $total_count;

    /** @var number The returned item count */
    public $count;

    /** @var string The used timezone */
    public $timezone;

    /** @var number The history report ID (async mode) */
    public $history_report_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
