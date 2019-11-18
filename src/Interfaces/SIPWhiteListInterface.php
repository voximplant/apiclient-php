<?php

namespace Voximplant\Interfaces;

interface SIPWhiteListInterface
{
    /**
     * @method Adds a new network address to the SIP white list.
     */
    public function AddSipWhiteListItem(\Voximplant\Resources\Params\AddSipWhiteListItemParams $params);

    /**
     * @method Deletes the network address from the SIP white list.
     */
    public function DelSipWhiteListItem(\Voximplant\Resources\Params\DelSipWhiteListItemParams $params);

    /**
     * @method Edits the SIP white list.
     */
    public function SetSipWhiteListItem(\Voximplant\Resources\Params\SetSipWhiteListItemParams $params);

    /**
     * @method Gets the SIP white list.
     */
    public function GetSipWhiteList(\Voximplant\Resources\Params\GetSipWhiteListParams $params);
}
class AddSipWhiteListItemReturn
{
	/** @var number 1 */
	public $result;

	/** @var number The SIP white list item ID. */
	public $sip_whitelist_id;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class DelSipWhiteListItemReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class SetSipWhiteListItemReturn
{
	/** @var number 1 */
	public $result;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
class GetSipWhiteListReturn
{
	/** @var [SipWhiteListInfoType] */
	public $result;

	/** @var number The total found networks count. */
	public $total_count;

	/** @var number The returned networks count. */
	public $count;

	/** @var array The returned error message. */
	public $error;

	/** @var array The returned error message. */
	public $errors;
}
