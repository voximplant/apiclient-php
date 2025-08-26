<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddWABPhoneNumberReturn;
use Voximplant\Interfaces\DeleteWABPhoneNumberReturn;
use Voximplant\Interfaces\GetWABPhoneNumbersReturn;
use Voximplant\Interfaces\SetWABPhoneNumberInfoReturn;
use Voximplant\Interfaces\WABPhoneNumbersInterface;

class WABPhoneNumbers implements WABPhoneNumbersInterface
{
    protected $client;

    /** @object AddWABPhoneNumber */
    protected $AddWABPhoneNumberReturn;

    /** @object DeleteWABPhoneNumber */
    protected $DeleteWABPhoneNumberReturn;

    /** @object SetWABPhoneNumberInfo */
    protected $SetWABPhoneNumberInfoReturn;

    /** @object GetWABPhoneNumbers */
    protected $GetWABPhoneNumbersReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddWABPhoneNumberReturn = new AddWABPhoneNumberReturn();
        $this->DeleteWABPhoneNumberReturn = new DeleteWABPhoneNumberReturn();
        $this->SetWABPhoneNumberInfoReturn = new SetWABPhoneNumberInfoReturn();
        $this->GetWABPhoneNumbersReturn = new GetWABPhoneNumbersReturn();
    }

    /**
     * @method Adds a new WhatsApp Business phone number.
     */
    public function AddWABPhoneNumber(Params\AddWABPhoneNumberParams $params = null): AddWABPhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddWABPhoneNumberReturn->$key = $value;
        }
        return $this->AddWABPhoneNumberReturn;
    }

    /**
     * @method Deletes a WhatsApp Business phone number.
     */
    public function DeleteWABPhoneNumber(Params\DeleteWABPhoneNumberParams $params = null): DeleteWABPhoneNumberReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DeleteWABPhoneNumberReturn->$key = $value;
        }
        return $this->DeleteWABPhoneNumberReturn;
    }

    /**
     * @method Sets details for the specified WhatsApp Business phone number.
     */
    public function SetWABPhoneNumberInfo(Params\SetWABPhoneNumberInfoParams $params = null): SetWABPhoneNumberInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetWABPhoneNumberInfoReturn->$key = $value;
        }
        return $this->SetWABPhoneNumberInfoReturn;
    }

    /**
     * @method Gets the account's WhatsApp Business phone numbers.
     */
    public function GetWABPhoneNumbers(Params\GetWABPhoneNumbersParams $params = null): GetWABPhoneNumbersReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetWABPhoneNumbersReturn->$key = $value;
        }
        return $this->GetWABPhoneNumbersReturn;
    }
}
