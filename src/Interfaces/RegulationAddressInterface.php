<?php

namespace Voximplant\Interfaces;

interface RegulationAddressInterface
{
    /**
     * @method Link regulation address to phone
     */
    public function LinkregulationAddress(\Voximplant\Resources\Params\LinkregulationAddressParams $params);

    /**
     * @method Search available zip codes
     */
    public function GetZIPCodes(\Voximplant\Resources\Params\GetZIPCodesParams $params);

    /**
     * @method Search user's regulation address
     */
    public function GetRegulationsAddress(\Voximplant\Resources\Params\GetRegulationsAddressParams $params);

    /**
     * @method Search available regulation for link
     */
    public function GetAvailableRegulations(\Voximplant\Resources\Params\GetAvailableRegulationsParams $params);

    /**
     * @method Get all countries
     */
    public function GetCountries(\Voximplant\Resources\Params\GetCountriesParams $params);

    /**
     * @method Get available regions in country
     */
    public function GetRegions(\Voximplant\Resources\Params\GetRegionsParams $params);
}
class LinkregulationAddressReturn
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
	/** @var [ZipCode] The ZipCode records. */
	public $result;

	/** @var number The returned zip codes count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetRegulationsAddressReturn
{
	/** @var [RegulationAddress] The RegulationAddress records. */
	public $result;

	/** @var number The returned regulation address count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetAvailableRegulationsReturn
{
	/** @var boolean If result equals 1: 1) the user has at least one regulation address which is appropriate for verification or 2) the verification is not required. If result equals 0, the regulations address needs to be created. */
	public $result;

	/** @var [RegulationAddress] The available RegulationAddress records. */
	public $available_address;

	/** @var number The count of RegulationAddress in progress status. */
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
