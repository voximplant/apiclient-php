<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\GetAvailableRegulationsReturn;
use Voximplant\Interfaces\GetCountriesReturn;
use Voximplant\Interfaces\GetRegionsReturn;
use Voximplant\Interfaces\GetRegulationsAddressReturn;
use Voximplant\Interfaces\GetZIPCodesReturn;
use Voximplant\Interfaces\LinkregulationAddressReturn;
use Voximplant\Interfaces\RegulationAddressInterface;

class RegulationAddress implements RegulationAddressInterface
{
    protected $client;

    /** @object LinkregulationAddress */
    protected $LinkregulationAddressReturn;

    /** @object GetZIPCodes */
    protected $GetZIPCodesReturn;

    /** @object GetRegulationsAddress */
    protected $GetRegulationsAddressReturn;

    /** @object GetAvailableRegulations */
    protected $GetAvailableRegulationsReturn;

    /** @object GetCountries */
    protected $GetCountriesReturn;

    /** @object GetRegions */
    protected $GetRegionsReturn;

    public function __construct($client)
    {
        $this->client = $client;

        $this->LinkregulationAddressReturn = new LinkregulationAddressReturn();
        $this->GetZIPCodesReturn = new GetZIPCodesReturn();
        $this->GetRegulationsAddressReturn = new GetRegulationsAddressReturn();
        $this->GetAvailableRegulationsReturn = new GetAvailableRegulationsReturn();
        $this->GetCountriesReturn = new GetCountriesReturn();
        $this->GetRegionsReturn = new GetRegionsReturn();
    }

    /**
     * @method Links the regulation address to a phone
     */
    public function LinkregulationAddress(Params\LinkregulationAddressParams $params = null): LinkregulationAddressReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->LinkregulationAddressReturn->$key = $value;
        }
        return $this->LinkregulationAddressReturn;
    }

    /**
     * @method Searches for available zip codes
     */
    public function GetZIPCodes(Params\GetZIPCodesParams $params = null): GetZIPCodesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetZIPCodesReturn->$key = $value;
        }
        return $this->GetZIPCodesReturn;
    }

    /**
     * @method Searches for the user's regulation address
     */
    public function GetRegulationsAddress(Params\GetRegulationsAddressParams $params = null): GetRegulationsAddressReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetRegulationsAddressReturn->$key = $value;
        }
        return $this->GetRegulationsAddressReturn;
    }

    /**
     * @method Searches for the available regulation for a link
     */
    public function GetAvailableRegulations(Params\GetAvailableRegulationsParams $params = null): GetAvailableRegulationsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetAvailableRegulationsReturn->$key = $value;
        }
        return $this->GetAvailableRegulationsReturn;
    }

    /**
     * @method Gets all countries
     */
    public function GetCountries(Params\GetCountriesParams $params = null): GetCountriesReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetCountriesReturn->$key = $value;
        }
        return $this->GetCountriesReturn;
    }

    /**
     * @method Gets available regions in a country
     */
    public function GetRegions(Params\GetRegionsParams $params = null): GetRegionsReturn
    {
        foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
            $this->GetRegionsReturn->$key = $value;
        }
        return $this->GetRegionsReturn;
    }
}
