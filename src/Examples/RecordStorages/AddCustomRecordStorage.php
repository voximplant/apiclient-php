<?php

/**
 * @method AddCustomRecordStorage Adds a custom record storage.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\AddCustomRecordStorageParams;

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
 * host - Host endpoint for the custom storage.
 * access_key_id - Access key ID used to authenticate requests.
 * secret_access_key - Secret access key used to authenticate requests.
 * bucket - Name of the storage bucket.
 * region - Geographic region where the bucket is located.
 * signature_version - Signature version to use for signing requests.
 * bucket_is_domain - Whether the bucket name should be treated as a domain.
 * storage_class - Storage class to assign to newly uploaded objects.
 * acl - Access Control List rule applied to objects.
 * cors - Cross-Origin Resource Sharing configuration.
 * multipart_upload - Whether to enable large file multipart uploading.
 * attached_application_id - Set of application IDs attached to this storage configuration.
 */
$params = new AddCustomRecordStorageParams();

$params->host = 'example.com';
$params->access_key_id = 'AKIAIOSFODNN7EXAMPLE';
$params->secret_access_key = 'wJalrXUtnFEMI/K7MDENG/bPxRfiCYEXAMPLEKEY';
$params->bucket = 'my-custom-voximplant-bucket';

// Adds a custom record storage.
$result = $voxApi->RecordStorages->AddCustomRecordStorage($params);

// Show result
var_dump($result);
