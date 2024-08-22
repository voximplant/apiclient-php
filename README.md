# Voximplant API client library

#### Version 2.10.0

## Prerequisites

In order to use the Voximplant PHP SDK, you need the following:

1. A developer account. If you don't have one, [sign up here](https://manage.voximplant.com/auth/sign_up).
1. A private API key. There are 2 options to obtain it:
    1. Either generate it in the [Voximplant Control panel](https://manage.voximplant.com/settings/service_accounts)
    1. Or call the [CreateKey](https://voximplant.com/docs/references/httpapi/rolesystem#createkey) HTTP API method with
       the specified [authentication parameters](https://voximplant.com/docs/howtos/integration/httpapi/auth). You'll
       receive a response with the __result__ field in it. Save the __result__ value in a file (since we don't store the
       keys, save it securely on your side).

## How to use

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json 
{
  "require": {
    "voximplant/apiclient-php": "*@dev"
  }
}
```

Then run

```bash
composer install
```

Next, specify the path to the file with the __result__ value either in the constructor or using the environment.

__constructor__:

```php
$voxApi = new VoximplantApi('path/to/private/api/key.json');
```

__env__:

```php
$_ENV['VOXIMPLANT_CREDENTIALS_PATH'] = 'path/to/private/api/key.json';
```

From now on you have access to the SDK methods.

## Examples

### Start a scenario

```php
use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\StartScenariosParams;

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * rule_id - The rule ID.
 * script_custom_data - The script custom data (like a script argument). Can be accessed in JS scenario via the VoxEngine.customData() method
 */
$params = new StartScenariosParams();

$params->rule_id = 1;
$params->script_custom_data = 'mystr';

// Start the scripts from the account.
$result = $voxApi->Scenarios->StartScenarios($params);

// Show result
print_r($result);
```

### Send an SMS

```php
use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\SendSmsMessageParams;

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * source - The source phone number.
 * destination - The destination phone number.
 * sms_body - The message.
 */
$params = new SendSmsMessageParams();

$params->source = '447443332211';
$params->destination = '447443332212';
$params->sms_body = 'Test message';

// Send the SMS message with text "Test message" from the phone number 447443332211 to the phone number 447443332212.
$result = $voxApi->SMS->SendSmsMessage($params);

// Show result
print_r($result);
```

### Get a call history item

```php
use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallHistoryParams;

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * count - The max returning record count.
 * timezone - The selected timezone or the 'auto' value (will be used the account location).
 */
$params = new GetCallHistoryParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->count = 1;
$params->timezone = 'Etc/GMT';

// Get the first call session history record from the 2012-01-01 00:00:00 UTC to the 2014-01-01 00:00:00 UTC
$result = $voxApi->History->GetCallHistory($params);

// Show result
print_r($result);
```

### Get the transaction history

```php
use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetTransactionHistoryParams;

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * from_date - The from date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * to_date - The to date in the selected timezone in 24-h format: YYYY-MM-DD HH:mm:ss
 * count - The max returning record count.
 * transaction_type - The transaction type list. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund.
 * timezone - The selected timezone or the 'auto' value (will be used the account location).
 */
$params = new GetTransactionHistoryParams();

$params->from_date = '2012-01-01 00:00:00';
$params->to_date = '2014-01-01 00:00:00';
$params->count = 3;
$params->transaction_type = array (
    0 => 'gift',
    1 => 'money_distribution',
);
$params->timezone = 'Etc/GMT';

// Get the three transactions record from the 2012-01-01 00:00:00 UTC to the 2014-01-01 00:00:00 UTC with the 'gift' or 'money_distribution' types.
$result = $voxApi->History->GetTransactionHistory($params);
 
// Show result
print_r($result);
```
