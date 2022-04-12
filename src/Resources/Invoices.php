<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\GetAccountInvoicesReturn;
use Voximplant\Interfaces\InvoicesInterface;

class Invoices implements InvoicesInterface
{
    protected $client;

    /** @object GetAccountInvoices */
    protected $GetAccountInvoicesReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->GetAccountInvoicesReturn = new GetAccountInvoicesReturn();
    }

    /**
     * @method Gets all invoices of the specified USD or EUR account.
     */
    public function GetAccountInvoices(Params\GetAccountInvoicesParams $params = null): GetAccountInvoicesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAccountInvoicesReturn->$key = $value;
        }
        return $this->GetAccountInvoicesReturn;
    }
}
