<p align="center"><img src="https://raw.githubusercontent.com/truckspace/art/main/navio/logo.svg"></p>

## Introduction

Please note: This is not an Official Client for Navio.
The Navio PHP Client grants users easier access to the Navio API. Allowing you to implement adding/removing drivers as well as retrieving drivers from the Navio System.

## Requirements

- PHP 7.4 or later
- Composer
- API Key is set in config/services.php

```php
  'navio' => [
    'apikey' => env('NAVIO_API_KEY'),
  ],
```

## Composer

You can install the package via [Composer](https://getcomposer.org). Run the following command:

```bash
composer require huckinb/navio-api-client
```

To use the package, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Navio Documentation

Documentation for API can be found on the [Docs](https://docs.navio.app/api-getting-started).

## Support

If you have any questions about the client, please create an issues ticket [New](https://github.com/HuckinB/Navio-API-Client/issues/new)

## License

This package is open-source and is licensed under the [MIT license](LICENSE.md).
