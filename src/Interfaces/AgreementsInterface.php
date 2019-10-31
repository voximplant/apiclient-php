<?php

namespace Voximplant\Interfaces;

interface AgreementsInterface
{
	/**
	 * @method Downloads Agreement in PDF format
	 */
	public function DownloadAgreement(\Voximplant\Resources\Params\DownloadAgreementParams $params);
}
class DownloadAgreementReturn
{
	/** @var unknown See the HTTP Content-type header instead. */
	public $unknown;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
