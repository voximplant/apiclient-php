<?php

namespace Voximplant\Interfaces;

interface InvoicesInterface
{
    /**
     * @method Gets all invoices of the specified USD or EUR account.
     */
    public function GetAccountInvoices(\Voximplant\Resources\Params\GetAccountInvoicesParams $params);

    /**
     * @method Downloads the specified invoice.
     */
    public function DownloadInvoice(\Voximplant\Resources\Params\DownloadInvoiceParams $params);
}
class GetAccountInvoicesReturn
{
    /** @var AccountInvoice Array of the account invoices */
    public $result;

    /** @var number Total number of invoices matching the query parameters */
    public $total_count;

    /** @var number Number of returned invoices matching the query parameters */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DownloadInvoiceReturn
{
    /** @var file The method returns a raw data, there is no 'file_content' parameter in fact */
    public $file_content;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
