<p align="center"><img src="https://truckershub.in/images/logo.png"></p>

## Introduction

Please note: This is not an Official Client for TruckersHub.
The TruckersHub PHP Client grants users easier access to the TruckersHub API. Allowing you to implement adding/removing drivers as
well as retrieving drivers from the TruckersHub System.

## Requirements

- PHP 7.4 or later
- Composer
- API Key is set in config/services.php

```php
  'truckershub' => [
    'apikey' => env('TRUCKERSHUB_API_KEY'),
  ],
```

## Composer

You can install the package via [Composer](https://getcomposer.org). Run the following command:

```bash
composer require velesco/truckershub-api-client
```

To use the package, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## License

This package is open-source and is licensed under the [MIT license](LICENSE.md).
