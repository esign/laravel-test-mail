# Send test mails to verify your mail setup in Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-test-mail.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-test-mail)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-test-mail.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-test-mail)
![GitHub Actions](https://github.com/esign/laravel-test-mail/actions/workflows/main.yml/badge.svg)

A short intro about the package.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-test-mail
```

The package will automatically register a service provider.

Next up, you can publish the configuration file:
```bash
php artisan vendor:publish --provider="Esign\TestMail\TestMailServiceProvider" --tag="config"
```

## Usage

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
