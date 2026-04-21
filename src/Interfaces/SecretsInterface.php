<?php

namespace Voximplant\Interfaces;

interface SecretsInterface
{
    /**
     * @method Adds a new secret.
     */
    public function AddSecret(\Voximplant\Resources\Params\AddSecretParams $params);

    /**
     * @method Deletes an existing secret.
     */
    public function DelSecret(\Voximplant\Resources\Params\DelSecretParams $params);

    /**
     * @method Gets the value of a specific secret.
     */
    public function GetSecretValue(\Voximplant\Resources\Params\GetSecretValueParams $params);

    /**
     * @method Gets the list of an application's secrets.
     */
    public function GetSecrets(\Voximplant\Resources\Params\GetSecretsParams $params);

    /**
     * @method Edits a secret's parameters.
     */
    public function SetSecretInfo(\Voximplant\Resources\Params\SetSecretInfoParams $params);
}
class AddSecretReturn
{
    /** @var [AddSecretResult] Result with the added secret ID */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelSecretReturn
{
    /** @var number Returns 1 if the secret has been deleted successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetSecretValueReturn
{
    /** @var [GetSecretValueResult] The full secret info (with value) */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetSecretsReturn
{
    /** @var [SecretListItem] Secrets list */
    public $result;

    /** @var number Returned secrets number */
    public $count;

    /** @var number Total found secrets number */
    public $total_count;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class SetSecretInfoReturn
{
    /** @var number Returns 1 if the secret has been updated successfully */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
