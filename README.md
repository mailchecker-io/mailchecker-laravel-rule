# mailchecker-laravel-rule
[![Latest Version on Packagist](https://img.shields.io/packagist/v/mailchecker-io/mailchecker-laravel-rule.svg)](https://packagist.org/packages/mailchecker-io/mailchecker-laravel-rule)
![Tests](https://github.com/mailchecker-io/mailchecker-laravel-rule/actions/workflows/run-tests.yml/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/mailchecker-io/mailchecker-laravel-rule)](https://packagist.org/packages/mailchecker-io/mailchecker-laravel-rule)

An easy to use Laravel Rule that uses the MailChecker.io service

---
## Installation

You can install the package via composer:

```bash
composer require mailchecker-io/mailchecker-laravel-rule
```

## Running the validation rule

```php
// in a `FormRequest`

use MailChecker\LaravelValidationRule\MailChecker;

public function rules()
{
    return [
        'email' => [new MailChecker(<YOUR_API_KEY>)],
    ];
}
```

