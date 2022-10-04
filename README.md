# A package to quickly add on a login log

[![Latest Version on Packagist](https://img.shields.io/packagist/v/modernben/track_logins.svg?style=flat-square)](https://packagist.org/packages/modernben/track_logins)
[![Total Downloads](https://img.shields.io/packagist/dt/modernben/track_logins.svg?style=flat-square)](https://packagist.org/packages/modernben/track_logins)

## Installation

You can install the package via composer:

```bash
composer require modernben/track_logins
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Modernben\TrackLogins\TrackLoginsServiceProvider" --tag="track_logins-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Modernben\TrackLogins\TrackLoginsServiceProvider" --tag="track_logins-config"
```

This is the contents of the published config file:

```php
return [

    /**
     * This value sets the name of the table you would like
     * to store the logins on.
     */
    'table' => env('MODERNBEN_LOGIN_TABLE', 'last_logins'),
];
```

## Usage

Add the `Modernben\Traits\TrackLogins` trait to your user model and that's it!
This works by hooking into the `Login` event thrown by Laravel.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ben Miller](https://github.com/modernben)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
