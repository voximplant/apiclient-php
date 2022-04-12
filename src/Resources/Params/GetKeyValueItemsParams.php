<?php

namespace Voximplant\Resources\Params;

class GetKeyValueItemsParams
{
    /** @var string Namespace that keys should contain, up to 200 characters */
    public $key;

    /** @var number Number of items to show per page with a maximum value of 50. Default value is 10 */
    public $count;

    /** @var number Number of items to skip (e.g. if you set count = 20 and offset = 0 the first time, the next time, offset has to be equal to 20 to skip the items shown earlier). Default value is 0 */
    public $offset;

    /** @var number The application ID */
    public $application_id;

    /** @var string The application name */
    public $application_name;
}
