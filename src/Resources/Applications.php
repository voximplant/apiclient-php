<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AddApplicationReturn;
use Voximplant\Interfaces\ApplicationsInterface;
use Voximplant\Interfaces\DelApplicationReturn;
use Voximplant\Interfaces\GetApplicationsReturn;
use Voximplant\Interfaces\SetApplicationInfoReturn;

class Applications implements ApplicationsInterface
{
    protected $client;

    /** @object AddApplication */
    protected $AddApplicationReturn;

    /** @object DelApplication */
    protected $DelApplicationReturn;

    /** @object SetApplicationInfo */
    protected $SetApplicationInfoReturn;

    /** @object GetApplications */
    protected $GetApplicationsReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->AddApplicationReturn = new AddApplicationReturn();
        $this->DelApplicationReturn = new DelApplicationReturn();
        $this->SetApplicationInfoReturn = new SetApplicationInfoReturn();
        $this->GetApplicationsReturn = new GetApplicationsReturn();
    }

    /**
     * @method Adds a new account's application.
     */
    public function AddApplication(Params\AddApplicationParams $params = null): AddApplicationReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->AddApplicationReturn->$key = $value;
        }
        return $this->AddApplicationReturn;
    }

    /**
     * @method Deletes the account's application.
     */
    public function DelApplication(Params\DelApplicationParams $params = null): DelApplicationReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->DelApplicationReturn->$key = $value;
        }
        return $this->DelApplicationReturn;
    }

    /**
     * @method Edits the account's application.
     */
    public function SetApplicationInfo(Params\SetApplicationInfoParams $params = null): SetApplicationInfoReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->SetApplicationInfoReturn->$key = $value;
        }
        return $this->SetApplicationInfoReturn;
    }

    /**
     * @method Gets the account's applications.
     */
    public function GetApplications(Params\GetApplicationsParams $params = null): GetApplicationsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetApplicationsReturn->$key = $value;
        }
        return $this->GetApplicationsReturn;
    }
}
