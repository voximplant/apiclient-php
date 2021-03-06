<?php

namespace Voximplant\Interfaces;

interface DialogflowCredentialsInterface
{
    /**
     * @method Adds a Dialogflow key.
     */
    public function AddDialogflowKey(\Voximplant\Resources\Params\AddDialogflowKeyParams $params);

    /**
     * @method Edits a Dialogflow key.
     */
    public function SetDialogflowKey(\Voximplant\Resources\Params\SetDialogflowKeyParams $params);

    /**
     * @method Removes a Dialogflow key.
     */
    public function DelDialogflowKey(\Voximplant\Resources\Params\DelDialogflowKeyParams $params);

    /**
     * @method Gets Dialogflow keys.
     */
    public function GetDialogflowKeys(\Voximplant\Resources\Params\GetDialogflowKeysParams $params);

    /**
     * @method Binds a Dialogflow key to the specified applications.
     */
    public function BindDialogflowKeys(\Voximplant\Resources\Params\BindDialogflowKeysParams $params);
}
class AddDialogflowKeyReturn
{
    /** @var number */
    public $result;

    /** @var number */
    public $dialogflow_key_id;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetDialogflowKeyReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelDialogflowKeyReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetDialogflowKeysReturn
{
    /** @var [DialogflowKeyInfo] */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class BindDialogflowKeysReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
