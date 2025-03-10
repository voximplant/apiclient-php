<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\DeleteRecordReturn;
use Voximplant\Interfaces\DownloadHistoryReportReturn;
use Voximplant\Interfaces\GetACDHistoryReturn;
use Voximplant\Interfaces\GetAuditLogAsyncReturn;
use Voximplant\Interfaces\GetAuditLogReturn;
use Voximplant\Interfaces\GetBriefCallHistoryReturn;
use Voximplant\Interfaces\GetCallHistoryAsyncReturn;
use Voximplant\Interfaces\GetCallHistoryReturn;
use Voximplant\Interfaces\GetHistoryReportsReturn;
use Voximplant\Interfaces\GetPhoneNumberReportsReturn;
use Voximplant\Interfaces\GetTransactionHistoryAsyncReturn;
use Voximplant\Interfaces\GetTransactionHistoryReturn;
use Voximplant\Interfaces\HistoryInterface;

class History implements HistoryInterface
{
    protected $client;

    /** @object GetCallHistory */
    protected $GetCallHistoryReturn;

    /** @object GetCallHistoryAsync */
    protected $GetCallHistoryAsyncReturn;

    /** @object GetBriefCallHistory */
    protected $GetBriefCallHistoryReturn;

    /** @object GetHistoryReports */
    protected $GetHistoryReportsReturn;

    /** @object GetPhoneNumberReports */
    protected $GetPhoneNumberReportsReturn;

    /** @object DownloadHistoryReport */
    protected $DownloadHistoryReportReturn;

    /** @object GetTransactionHistory */
    protected $GetTransactionHistoryReturn;

    /** @object GetTransactionHistoryAsync */
    protected $GetTransactionHistoryAsyncReturn;

    /** @object DeleteRecord */
    protected $DeleteRecordReturn;

    /** @object GetACDHistory */
    protected $GetACDHistoryReturn;

    /** @object GetAuditLog */
    protected $GetAuditLogReturn;

    /** @object GetAuditLogAsync */
    protected $GetAuditLogAsyncReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetCallHistoryReturn = new GetCallHistoryReturn();
        $this->GetCallHistoryAsyncReturn = new GetCallHistoryAsyncReturn();
        $this->GetBriefCallHistoryReturn = new GetBriefCallHistoryReturn();
        $this->GetHistoryReportsReturn = new GetHistoryReportsReturn();
        $this->GetPhoneNumberReportsReturn = new GetPhoneNumberReportsReturn();
        $this->DownloadHistoryReportReturn = new DownloadHistoryReportReturn();
        $this->GetTransactionHistoryReturn = new GetTransactionHistoryReturn();
        $this->GetTransactionHistoryAsyncReturn = new GetTransactionHistoryAsyncReturn();
        $this->DeleteRecordReturn = new DeleteRecordReturn();
        $this->GetACDHistoryReturn = new GetACDHistoryReturn();
        $this->GetAuditLogReturn = new GetAuditLogReturn();
        $this->GetAuditLogAsyncReturn = new GetAuditLogAsyncReturn();
    }

    /**
     * @method Gets the account's call history (including call duration, cost, logs and other call information). You can filter the call history by a certain date.
     */
    public function GetCallHistory(Params\GetCallHistoryParams $params = null): GetCallHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallHistoryReturn->$key = $value;
        }
        return $this->GetCallHistoryReturn;
    }

    /**
     * @method The [GetCallHistory] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetCallHistoryAsync(Params\GetCallHistoryAsyncParams $params = null): GetCallHistoryAsyncReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallHistoryAsyncReturn->$key = $value;
        }
        return $this->GetCallHistoryAsyncReturn;
    }

    /**
     * @method Gets the account's brief call history in the asynchronous mode. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetBriefCallHistory(Params\GetBriefCallHistoryParams $params = null): GetBriefCallHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetBriefCallHistoryReturn->$key = $value;
        }
        return $this->GetBriefCallHistoryReturn;
    }

    /**
     * @method Gets the list of history reports and their statuses. The method returns info about the reports made via [GetCallHistoryAsync], [GetTransactionHistoryAsync], [GetAuditLogAsync] and [GetBriefCallHistory] asynchronous methods. Note that the **file_size** field in response is valid only for the video calls.
     */
    public function GetHistoryReports(Params\GetHistoryReportsParams $params = null): GetHistoryReportsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetHistoryReportsReturn->$key = $value;
        }
        return $this->GetHistoryReportsReturn;
    }

    /**
     * @method Receives information about the created phone numbers report or list of reports.
     */
    public function GetPhoneNumberReports(Params\GetPhoneNumberReportsParams $params = null): GetPhoneNumberReportsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetPhoneNumberReportsReturn->$key = $value;
        }
        return $this->GetPhoneNumberReportsReturn;
    }

    /**
     * @method Downloads the required history report.Please note, that the history report can return in a compressed state (*.gzip). In order for CURL to process a compressed file correctly, add the **--compressed** key.
     */
    public function DownloadHistoryReport(Params\DownloadHistoryReportParams $params = null): DownloadHistoryReportReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DownloadHistoryReportReturn->$key = $value;
        }
        return $this->DownloadHistoryReportReturn;
    }

    /**
     * @method Gets the transaction history.
     */
    public function GetTransactionHistory(Params\GetTransactionHistoryParams $params = null): GetTransactionHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetTransactionHistoryReturn->$key = $value;
        }
        return $this->GetTransactionHistoryReturn;
    }

    /**
     * @method The [GetTransactionHistory] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetTransactionHistoryAsync(Params\GetTransactionHistoryAsyncParams $params = null): GetTransactionHistoryAsyncReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetTransactionHistoryAsyncReturn->$key = $value;
        }
        return $this->GetTransactionHistoryAsyncReturn;
    }

    /**
     * @method Try to remove a record and transcription files.
     */
    public function DeleteRecord(Params\DeleteRecordParams $params = null): DeleteRecordReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DeleteRecordReturn->$key = $value;
        }
        return $this->DeleteRecordReturn;
    }

    /**
     * @method Gets the ACD history.
     */
    public function GetACDHistory(Params\GetACDHistoryParams $params = null): GetACDHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetACDHistoryReturn->$key = $value;
        }
        return $this->GetACDHistoryReturn;
    }

    /**
     * @method Gets the history of account changes.
     */
    public function GetAuditLog(Params\GetAuditLogParams $params = null): GetAuditLogReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAuditLogReturn->$key = $value;
        }
        return $this->GetAuditLogReturn;
    }

    /**
     * @method The [GetAuditLog] asynchronous implementation. Use this function to download a large amounts of data. Take a look at the [GetHistoryReports] and [DownloadHistoryReport] functions for downloading details.
     */
    public function GetAuditLogAsync(Params\GetAuditLogAsyncParams $params = null): GetAuditLogAsyncReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAuditLogAsyncReturn->$key = $value;
        }
        return $this->GetAuditLogAsyncReturn;
    }
}
