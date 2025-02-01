# Send test mails to verify your mail setup in Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/laravel-test-mail.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-test-mail)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/laravel-test-mail.svg?style=flat-square)](https://packagist.org/packages/esign/laravel-test-mail)
![GitHub Actions](https://github.com/esign/laravel-test-mail/actions/workflows/main.yml/badge.svg)

This package provides a simple command to send test emails, allowing you to verify your mail setup in a Laravel application.
It supports both immediate sending and queueing of test emails.

## Installation

You can install the package via composer:

```bash
composer require esign/laravel-test-mail
```

## Usage

### Sending a Test Mail
You can use the `mail:test` command to send a test mail to a specified recipient:

```bash
php artisan mail:test hello@example.com
```

### Queueing a Test Mail

If you want to queue the test mail instead of sending it immediately, you can use the `--queue` option:

```bash
php artisan mail:test hello@example.com --queue
```

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
