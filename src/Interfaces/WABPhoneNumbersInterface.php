<?php

namespace Voximplant\Interfaces;

interface WABPhoneNumbersInterface
{
    /**
     * @method Adds a new WhatsApp Business phone number.
     */
    public function AddWABPhoneNumber(\Voximplant\Resources\Params\AddWABPhoneNumberParams $params);

    /**
     * @method Deletes a WhatsApp Business phone number.
     */
    public function DeleteWABPhoneNumber(\Voximplant\Resources\Params\DeleteWABPhoneNumberParams $params);

    /**
     * @method Sets details for the specified WhatsApp Business phone number.
     */
    public function SetWABPhoneNumberInfo(\Voximplant\Resources\Params\SetWABPhoneNumberInfoParams $params);

    /**
     * @method Gets the account's WhatsApp Business phone numbers.
     */
    public function GetWABPhoneNumbers(\Voximplant\Resources\Params\GetWABPhoneNumbersParams $params);
}
class AddWABPhoneNumberReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DeleteWABPhoneNumberReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetWABPhoneNumberInfoReturn
{
    /** @var number 1 */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetWABPhoneNumbersReturn
{
    /** @var [WABPhoneInfoType] WhatsApp Business phone numbers info */
    public $result;

    /** @var number Number of total records found */
    public $total_count;

    /** @var number Number of returned records */
    public $count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
