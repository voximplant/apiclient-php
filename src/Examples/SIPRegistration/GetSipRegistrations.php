<?php

/**
 * @method GetSipRegistrations Get active SIP registrations.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetSipRegistrationsParams;

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
 * sip_registration_id - The SIP registration ID
 * sip_username - The SIP user name to filter
 * deactivated - Whether to show the frozen SIP registrations only
 * successful - Whether to show the successful SIP registrations only
 * is_persistent - Whether the SIP registration is persistent to filter
 * application_id - The application ID list separated by semicolons (;) to filter. Can be used instead of application_name
 * application_name - The application name list separated by semicolons (;) to filter. Can be used instead of application_id
 * is_bound_to_application - Whether SIP registration bound to an application
 * rule_id - The rule ID list separated by semicolons (;) to filter. Can be used instead of rule_name
 * rule_name - The rule name list separated by semicolons (;) to filter. Can be used instead of rule_id
 * user_id - The user ID list separated by semicolons (;) to filter. Can be used instead of user_name
 * user_name - The user name list separated by semicolons (;) to filter. Can be used instead of user_id
 * proxy - The list of proxy servers to use, divided by semicolon (;)
 * in_progress - Whether SIP registration is still in progress
 * status_code - The list of SIP response codes. The __code1:code2__ means a range from __code1__ to __code2__ including; the __code1;code2__ meanse either __code1__ or __code2__. You can combine ranges, e.g., __code1;code2:code3__
 * count - The max returning record count
 * offset - The first N records are skipped in the output
 */
$params = new GetSipRegistrationsParams();


// Get all active sip registrations.
$result = $voxApi->SIPRegistration->GetSipRegistrations($params);

// Show result
var_dump($result);
