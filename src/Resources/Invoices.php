<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\DownloadInvoiceReturn;
use Voximplant\Interfaces\GetAccountInvoicesReturn;
use Voximplant\Interfaces\InvoicesInterface;

class Invoices implements InvoicesInterface
{
    protected $client;

    /** @object GetAccountInvoices */
    protected $GetAccountInvoicesReturn;

    /** @object DownloadInvoice */
    protected $DownloadInvoiceReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetAccountInvoicesReturn = new GetAccountInvoicesReturn();
        $this->DownloadInvoiceReturn = new DownloadInvoiceReturn();
    }

    /**
     * @method Gets all invoices for the specified USD or EUR account.
     */
    public function GetAccountInvoices(Params\GetAccountInvoicesParams $params = null): GetAccountInvoicesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAccountInvoicesReturn->$key = $value;
        }
        return $this->GetAccountInvoicesReturn;
    }

    /**
     * @method Downloads the specified invoice.
     */
    public function DownloadInvoice(Params\DownloadInvoiceParams $params = null): DownloadInvoiceReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DownloadInvoiceReturn->$key = $value;
        }
        return $this->DownloadInvoiceReturn;
    }
}
