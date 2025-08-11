<?php

namespace Voximplant\Resources\Params;

class SetKeyValueItemParams
{
    /** @var string Key, up to 200 characters. A key can contain a namespace that is written before the ':' symbol, for example, test:1234. Thus, namespace 'test' can be used as a pattern in the [GetKeyValueItems](/docs/references/httpapi/keyvaluestorage#getkeyvalueitems) and [GetKeyValueKeys](/docs/references/httpapi/keyvaluestorage#getkeyvaluekeys) methods to find the keys with the same namespace.The key should match the following regular expression: `^[a-zA-Z0-9а-яА-ЯёЁ_\-:;.#+]*$` */
    public $key;

    /** @var string Value for the specified key, up to 2000 characters */
    public $value;

    /** @var number Application ID */
    public $application_id;

    /** @var string Application name */
    public $application_name;

    /** @var number Key expiry time in seconds. The value is in range of 0..7,776,000 (90 days), the default value is 30 days (2,592,000 seconds). The TTL is converted to an **expires_at** Unix timestamp field as part of the storage object. Note that one of the two parameters (ttl or expires_at) must be set */
    public $ttl;

    /** @var number Expiration date based on **ttl** (timestamp without milliseconds). Note that one of the two parameters (ttl or expires_at) must be set */
    public $expires_at;
}
