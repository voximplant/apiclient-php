<?php

namespace Voximplant\Resources\Params;

class SetCustomRecordStorageInfoParams
{
    /** @var string Host endpoint for the custom storage. */
    public $host;

    /** @var string Access key ID used to authenticate requests. */
    public $access_key_id;

    /** @var string Secret access key used to authenticate requests. */
    public $secret_access_key;

    /** @var string Name of the storage bucket. */
    public $bucket;

    /** @var string Geographic region where the bucket is located. */
    public $region;

    /** @var string Signature version to use for signing requests. */
    public $signature_version;

    /** @var boolean Whether the bucket name should be treated as a domain. */
    public $bucket_is_domain;

    /** @var string Storage class to assign to newly uploaded objects. */
    public $storage_class;

    /** @var string Access Control List rule applied to objects. */
    public $acl;

    /** @var string Cross-Origin Resource Sharing configuration. */
    public $cors;

    /** @var boolean Whether to enable large file multipart uploading. */
    public $multipart_upload;

    /** @var string Set of application IDs attached to this storage configuration. */
    public $attached_application_id;

    /** @var number The unique identifier of the custom record storage configuration. */
    public $custom_record_storage_id;

    public function toArray()
    {
        return [
                'host' => $this->host,
                    'access_key_id' => $this->access_key_id,
                    'secret_access_key' => $this->secret_access_key,
                    'bucket' => $this->bucket,
                    'region' => $this->region,
                    'signature_version' => $this->signature_version,
                    'bucket_is_domain' => $this->bucket_is_domain !== null ? (filter_var($this->bucket_is_domain, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'storage_class' => $this->storage_class,
                    'acl' => $this->acl,
                    'cors' => $this->cors,
                    'multipart_upload' => $this->multipart_upload !== null ? (filter_var($this->multipart_upload, FILTER_VALIDATE_BOOLEAN) ? 'true' : 'false') : null,
                    'attached_application_id' => $this->attached_application_id,
                    'custom_record_storage_id' => $this->custom_record_storage_id,
            ];
    }
}
