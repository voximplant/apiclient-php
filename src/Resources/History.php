<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\DeleteRecordReturn;
use Voximplant\Interfaces\GetACDHistoryReturn;
use Voximplant\Interfaces\GetAuditLogReturn;
use Voximplant\Interfaces\GetBriefCallHistoryReturn;
use Voximplant\Interfaces\GetCallHistoryReturn;
use Voximplant\Interfaces\GetHistoryReportsReturn;
use Voximplant\Interfaces\GetTransactionHistoryReturn;
use Voximplant\Interfaces\HistoryInterface;

class History implements HistoryInterface
{
    protected $client;

    /** @object GetCallHistory */
    protected $GetCallHistoryReturn;

    /** @object GetBriefCallHistory */
    protected $GetBriefCallHistoryReturn;

    /** @object GetHistoryReports */
    protected $GetHistoryReportsReturn;

    /** @object GetTransactionHistory */
    protected $GetTransactionHistoryReturn;

    /** @object DeleteRecord */
    protected $DeleteRecordReturn;

    /** @object GetACDHistory */
    protected $GetACDHistoryReturn;

    /** @object GetAuditLog */
    protected $GetAuditLogReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetCallHistoryReturn = new GetCallHistoryReturn();
        $this->GetBriefCallHistoryReturn = new GetBriefCallHistoryReturn();
        $this->GetHistoryReportsReturn = new GetHistoryReportsReturn();
        $this->GetTransactionHistoryReturn = new GetTransactionHistoryReturn();
        $this->DeleteRecordReturn = new DeleteRecordReturn();
        $this->GetACDHistoryReturn = new GetACDHistoryReturn();
        $this->GetAuditLogReturn = new GetAuditLogReturn();
    }

    /**
     * @method Gets the account's call history, including call duration, cost, logs and other call information. You can filter the call history by a certain date
     */
    public function GetCallHistory(Params\GetCallHistoryParams $params = null): GetCallHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCallHistoryReturn->$key = $value;
        }
        return $this->GetCallHistoryReturn;
    }

    /**
     * @method Gets the account's brief call history. Use the [GetHistoryReports], [DownloadHistoryReport] methods to download the report.
     */
    public function GetBriefCallHistory(Params\GetBriefCallHistoryParams $params = null): GetBriefCallHistoryReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetBriefCallHistoryReturn->$key = $value;
        }
        return $this->GetBriefCallHistoryReturn;
    }

    /**
     * @method Gets the list of history reports and their statuses. The method returns info about reports made via [GetCallHistory] with the specified __output=csv__ and **is_async=true** parameters. Note that the **file_size** field in response is valid only for video calls.
     */
    public function GetHistoryReports(Params\GetHistoryReportsParams $params = null): GetHistoryReportsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetHistoryReportsReturn->$key = $value;
        }
        return $this->GetHistoryReportsReturn;
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
}
