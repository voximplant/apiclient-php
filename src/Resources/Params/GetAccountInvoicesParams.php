<?php

namespace Voximplant\Resources\Params;

class GetAccountInvoicesParams
{
    /** @var string Status to filter invoices. Possible values: new, taxed, accepted, committed, cancelled, numbered */
    public $status;

    /** @var number Number of invooces to show per page. Default value is 20 */
    public $count;

    /** @var number Number of invoices to skip (e.g. if you set count = 20 and offset = 0 the first time, the next time, offset has to be equal to 20 to skip the items shown earlier). Default value is 0 */
    public $offset;
}
