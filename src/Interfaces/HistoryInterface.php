<?php

namespace Voximplant\Interfaces;

interface HistoryInterface
{
    /**
     * @method Gets the account's call history (including call duration, cost, logs and other call information). You can filter the call history by a certain date.
     */
    public function GetCallHistory(\Voximplant\Resources\Params\GetCallHistoryParams $params);

    /**
     * @method The [GetCallHistory] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetCallHistoryAsync(\Voximplant\Resources\Params\GetCallHistoryAsyncParams $params);

    /**
     * @method Gets the account's brief call history in the asynchronous mode. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetBriefCallHistory(\Voximplant\Resources\Params\GetBriefCallHistoryParams $params);

    /**
     * @method Gets the list of history reports and their statuses. The method returns info about the reports made via [GetCallHistoryAsync], [GetTransactionHistoryAsync], [GetAuditLogAsync] and [GetBriefCallHistory] asynchronous methods. Note that the **file_size** field in response is valid only for the video calls.
     */
    public function GetHistoryReports(\Voximplant\Resources\Params\GetHistoryReportsParams $params);

    /**
     * @method Receives information about the created phone numbers report or list of reports.
     */
    public function GetPhoneNumberReports(\Voximplant\Resources\Params\GetPhoneNumberReportsParams $params);

    /**
     * @method Downloads the required history report.<br><br>Please note, that the history report can return in a compressed state (*.gzip). In order for CURL to process a compressed file correctly, add the **--compressed** key.
     */
    public function DownloadHistoryReport(\Voximplant\Resources\Params\DownloadHistoryReportParams $params);

    /**
     * @method Gets the transaction history.
     */
    public function GetTransactionHistory(\Voximplant\Resources\Params\GetTransactionHistoryParams $params);

    /**
     * @method The [GetTransactionHistory] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetTransactionHistoryAsync(\Voximplant\Resources\Params\GetTransactionHistoryAsyncParams $params);

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

    /**
     * @method The [GetAuditLog] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetAuditLogAsync(\Voximplant\Resources\Params\GetAuditLogAsyncParams $params);
}
class GetCallHistoryReturn
{
    /** @var [CallSessionInfoType] The CallSessionInfoType records */
    public $result;

    /** @var number The total found call session count */
    public $total_count;

    /** @var number The returned call session count */
    public $count;

    /** @var string The used timezone */
    public $timezone;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetCallHistoryAsyncReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The history report ID */
    public $history_report_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetBriefCallHistoryReturn
{
    /** @var number 1 */
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
class GetPhoneNumberReportsReturn
{
    /** @var [CommonReportType] */
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
class DownloadHistoryReportReturn
{
    /** @var file The method returns a raw data, there is no 'file_content' parameter in fact */
    public $file_content;

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

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetTransactionHistoryAsyncReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The history report ID */
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

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAuditLogAsyncReturn
{
    /** @var number 1 */
    public $result;

    /** @var number The history report ID */
    public $history_report_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
