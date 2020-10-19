<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddDialogflowKeyReturn;
use Voximplant\Interfaces\BindDialogflowKeysReturn;
use Voximplant\Interfaces\DelDialogflowKeyReturn;
use Voximplant\Interfaces\DialogflowCredentialsInterface;
use Voximplant\Interfaces\GetDialogflowKeysReturn;
use Voximplant\Interfaces\SetDialogflowKeyReturn;

class DialogflowCredentials implements DialogflowCredentialsInterface
{
    protected $client;

    /** @object AddDialogflowKey */
    protected $AddDialogflowKeyReturn;

    /** @object SetDialogflowKey */
    protected $SetDialogflowKeyReturn;

    /** @object DelDialogflowKey */
    protected $DelDialogflowKeyReturn;

    /** @object GetDialogflowKeys */
    protected $GetDialogflowKeysReturn;

    /** @object BindDialogflowKeys */
    protected $BindDialogflowKeysReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddDialogflowKeyReturn = new AddDialogflowKeyReturn();
        $this->SetDialogflowKeyReturn = new SetDialogflowKeyReturn();
        $this->DelDialogflowKeyReturn = new DelDialogflowKeyReturn();
        $this->GetDialogflowKeysReturn = new GetDialogflowKeysReturn();
        $this->BindDialogflowKeysReturn = new BindDialogflowKeysReturn();
    }

    /**
     * @method Adds a Dialogflow key.
     */
    public function AddDialogflowKey(Params\AddDialogflowKeyParams $params = null): AddDialogflowKeyReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddDialogflowKeyReturn->$key = $value;
        }
        return $this->AddDialogflowKeyReturn;
    }

    /**
     * @method Edits a Dialogflow key.
     */
    public function SetDialogflowKey(Params\SetDialogflowKeyParams $params = null): SetDialogflowKeyReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetDialogflowKeyReturn->$key = $value;
        }
        return $this->SetDialogflowKeyReturn;
    }

    /**
     * @method Removes a Dialogflow key.
     */
    public function DelDialogflowKey(Params\DelDialogflowKeyParams $params = null): DelDialogflowKeyReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelDialogflowKeyReturn->$key = $value;
        }
        return $this->DelDialogflowKeyReturn;
    }

    /**
     * @method Gets Dialogflow keys.
     */
    public function GetDialogflowKeys(Params\GetDialogflowKeysParams $params = null): GetDialogflowKeysReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetDialogflowKeysReturn->$key = $value;
        }
        return $this->GetDialogflowKeysReturn;
    }

    /**
     * @method Binds a Dialogflow key to the specified applications.
     */
    public function BindDialogflowKeys(Params\BindDialogflowKeysParams $params = null): BindDialogflowKeysReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->BindDialogflowKeysReturn->$key = $value;
        }
        return $this->BindDialogflowKeysReturn;
    }
}
