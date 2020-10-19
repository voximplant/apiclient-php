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

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * sip_registration_id - The SIP registration ID.
 * sip_username - The SIP user name to filter.
 * deactivated - Set true to show the frozen SIP registrations only.
 * successful - Set false to show the unsuccessful SIP registrations only.
 * is_persistent - The persistent flag to filter.
 * application_id - The application ID list to filter. Can be used instead of appliction_name.
 * application_name - The application name list to filter. Can be used instead of appliction_id.
 * is_bound_to_application - Is a SIP registration bound to an application.
 * rule_id - The rule ID list to filter. Can be used instead of rule_name.
 * rule_name - The rule name list to filter. Can be used instead of rule_id.
 * user_id - The user ID list to filter. Can be used instead of user_name.
 * user_name - The user name list to filter. Can be used instead of user_id.
 * proxy - The list of proxy servers to use, divided by the ';' symbol.
 * in_progress - SIP registration is still in progress.
 * status_code - The list of SIP response codes. The __code1:code2__ means a range from __code1__ to __code2__ including; the __code1;code2__ meanse either __code1__ or __code2__. You can combine ranges, e.g., __code1;code2:code3__.
 * count - The max returning record count.
 * offset - The first N records will be skipped in the output.
 */
$params = new GetSipRegistrationsParams();


// Get all active sip registrations
$result = $voxApi->SIPRegistration->GetSipRegistrations($params);

// Show result
var_dump($result);
