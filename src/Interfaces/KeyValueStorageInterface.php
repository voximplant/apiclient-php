<?php

namespace Voximplant\Interfaces;

interface KeyValueStorageInterface
{
    /**
     * @method Creates or updates a key-value pair. If an existing key is passed, the method will return the existing item and will change the value if needed. The keys should be unique within a Voximplant application.
     */
    public function SetKeyValueItem(\Voximplant\Resources\Params\SetKeyValueItemParams $params);

    /**
     * @method Deletes the specified key-value pair from the storage.
     */
    public function DelKeyValueItem(\Voximplant\Resources\Params\DelKeyValueItemParams $params);

    /**
     * @method Gets the specified key-value pair from the storage.
     */
    public function GetKeyValueItem(\Voximplant\Resources\Params\GetKeyValueItemParams $params);

    /**
     * @method Gets all the key-value pairs in which the keys begin with a pattern.
     */
    public function GetKeyValueItems(\Voximplant\Resources\Params\GetKeyValueItemsParams $params);

    /**
     * @method Gets all the keys of key-value pairs.
     */
    public function GetKeyValueKeys(\Voximplant\Resources\Params\GetKeyValueKeysParams $params);
}
class SetKeyValueItemReturn
{
    /** @var KeyValueItems The key-value item */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class DelKeyValueItemReturn
{
    /** @var number */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetKeyValueItemReturn
{
    /** @var KeyValueItems The key-value item */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetKeyValueItemsReturn
{
    /** @var KeyValueItems The key-value pairs */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
class GetKeyValueKeysReturn
{
    /** @var KeyValueKeys The key-value keys */
    public $result;

    /** @var array The returned error message. */
    public $error;

    /** @var array The returned error message. */
    public $errors;
}
