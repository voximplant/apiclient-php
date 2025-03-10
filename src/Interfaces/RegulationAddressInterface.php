<?php

namespace Voximplant\Interfaces;

interface RegulationAddressInterface
{
    /**
     * @method Links the regulation address to a phone.
     */
    public function LinkRegulationAddress(\Voximplant\Resources\Params\LinkRegulationAddressParams $params);

    /**
     * @method Searches for available zip codes.
     */
    public function GetZIPCodes(\Voximplant\Resources\Params\GetZIPCodesParams $params);

    /**
     * @method Searches for the user's regulation address.
     */
    public function GetRegulationsAddress(\Voximplant\Resources\Params\GetRegulationsAddressParams $params);

    /**
     * @method Searches for the available regulation for a link.
     */
    public function GetAvailableRegulations(\Voximplant\Resources\Params\GetAvailableRegulationsParams $params);

    /**
     * @method Gets all countries.
     */
    public function GetCountries(\Voximplant\Resources\Params\GetCountriesParams $params);

    /**
     * @method Gets available regions in a country.
     */
    public function GetRegions(\Voximplant\Resources\Params\GetRegionsParams $params);
}
class LinkRegulationAddressReturn
{
    /** @var boolean */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetZIPCodesReturn
{
    /** @var [ZipCode] The ZipCode records */
    public $result;

    /** @var number The returned zip codes count */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetRegulationsAddressReturn
{
    /** @var [RegulationAddress] The RegulationAddress records */
    public $result;

    /** @var number The returned regulation address count */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetAvailableRegulationsReturn
{
    /** @var boolean Whether the user has at least one regulation address which is appropriate for verification or the verification is not required. If result is false, the regulations address needs to be created */
    public $result;

    /** @var [RegulationAddress] The available RegulationAddress records */
    public $available_address;

    /** @var number The count of RegulationAddress in progress status */
    public $count_in_progress;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetCountriesReturn
{
    /** @var [RegulationCountry] */
    public $result;

    /** @var number */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetRegionsReturn
{
    /** @var [RegulationRegionRecord] */
    public $result;

    /** @var number */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
