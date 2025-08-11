<?php

/**
 * @method SetKeyValueItem Creates or updates a key-value pair. If an existing key is passed, the method returns the existing item and changes the value if needed. The keys should be unique within a Voximplant application.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SetKeyValueItemParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create options
$options = (object)[
  'tokenPath' => 'path/to/private/api/key.json',
];

// Create API Object
$voxApi = new VoximplantApi($options);

/**
 * @param array $params (See below)
 * key - Key, up to 200 characters. A key can contain a namespace that is written before the ':' symbol, for example, test:1234. Thus, namespace 'test' can be used as a pattern in the [GetKeyValueItems](/docs/references/httpapi/keyvaluestorage#getkeyvalueitems) and [GetKeyValueKeys](/docs/references/httpapi/keyvaluestorage#getkeyvaluekeys) methods to find the keys with the same namespace.The key should match the following regular expression: `^[a-zA-Z0-9а-яА-ЯёЁ_\-:;.#+]*$`
 * value - Value for the specified key, up to 2000 characters
 * application_id - Application ID
 * application_name - Application name
 * ttl - Key expiry time in seconds. The value is in range of 0..7,776,000 (90 days), the default value is 30 days (2,592,000 seconds). The TTL is converted to an **expires_at** Unix timestamp field as part of the storage object. Note that one of the two parameters (ttl or expires_at) must be set
 * expires_at - Expiration date based on **ttl** (timestamp without milliseconds). Note that one of the two parameters (ttl or expires_at) must be set
 */
$params = new SetKeyValueItemParams();

$params->application_id = 1;
$params->key = 'key1';
$params->value = 'value1';
$params->ttl = 864000;

// SetKeyValueItem example.
$result = $voxApi->KeyValueStorage->SetKeyValueItem($params);

// Show result
var_dump($result);
