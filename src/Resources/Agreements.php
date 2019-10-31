<?php

namespace Voximplant\Resources;

use Voximplant\Interfaces\AgreementsInterface;
use Voximplant\Interfaces\DownloadAgreementReturn;

class Agreements implements AgreementsInterface
{
	protected $client;

	/** @object DownloadAgreement */
	protected $DownloadAgreementReturn;


	public function __construct($client)
	{
		$this->client = $client;

		$this->DownloadAgreementReturn = new DownloadAgreementReturn();
	}


	/**
	 * @method Downloads Agreement in PDF format
	 */
	public function DownloadAgreement(Params\DownloadAgreementParams $params = null): DownloadAgreementReturn
	{
		foreach ($this->client->request(__FUNCTION__, $params) as $key => $value) {
		    $this->DownloadAgreementReturn->$key = $value;
		}
		return $this->DownloadAgreementReturn;
	}
}
