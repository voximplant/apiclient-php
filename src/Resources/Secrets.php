<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddSecretReturn;
use Voximplant\Interfaces\DelSecretReturn;
use Voximplant\Interfaces\GetSecretValueReturn;
use Voximplant\Interfaces\GetSecretsReturn;
use Voximplant\Interfaces\SecretsInterface;
use Voximplant\Interfaces\SetSecretInfoReturn;

class Secrets implements SecretsInterface
{
    protected $client;

    /** @object AddSecret */
    protected $AddSecretReturn;

    /** @object DelSecret */
    protected $DelSecretReturn;

    /** @object GetSecretValue */
    protected $GetSecretValueReturn;

    /** @object GetSecrets */
    protected $GetSecretsReturn;

    /** @object SetSecretInfo */
    protected $SetSecretInfoReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddSecretReturn = new AddSecretReturn();
        $this->DelSecretReturn = new DelSecretReturn();
        $this->GetSecretValueReturn = new GetSecretValueReturn();
        $this->GetSecretsReturn = new GetSecretsReturn();
        $this->SetSecretInfoReturn = new SetSecretInfoReturn();
    }

    /**
     * @method Adds a new secret.
     */
    public function AddSecret(Params\AddSecretParams $params = null): AddSecretReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddSecretReturn->$key = $value;
        }
        return $this->AddSecretReturn;
    }

    /**
     * @method Deletes an existing secret.
     */
    public function DelSecret(Params\DelSecretParams $params = null): DelSecretReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelSecretReturn->$key = $value;
        }
        return $this->DelSecretReturn;
    }

    /**
     * @method Gets the value of a specific secret.
     */
    public function GetSecretValue(Params\GetSecretValueParams $params = null): GetSecretValueReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSecretValueReturn->$key = $value;
        }
        return $this->GetSecretValueReturn;
    }

    /**
     * @method Gets the list of an application's secrets.
     */
    public function GetSecrets(Params\GetSecretsParams $params = null): GetSecretsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetSecretsReturn->$key = $value;
        }
        return $this->GetSecretsReturn;
    }

    /**
     * @method Edits a secret's parameters.
     */
    public function SetSecretInfo(Params\SetSecretInfoParams $params = null): SetSecretInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetSecretInfoReturn->$key = $value;
        }
        return $this->SetSecretInfoReturn;
    }
}
