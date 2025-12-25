# HTTP Status Codes (Composer)

This lightweight PHP package provides named constants and helper methods for HTTP status codes so developers can use meaningful constant names instead of raw integers.

## Installation

Add to your project using Composer (once published):

```bash
composer require akashjoshi1999/http-status-code
```

Or include locally via `composer.json` PSR-4 autoload.

## Usage

```php
use StatusCodes\HttpStatus;

// Use named constant instead of literal number
$status = HttpStatus::OK; // 200

// Get reason phrase
$phrase = HttpStatus::reasonPhrase($status); // 'OK'

// Get constant name from code
$name = HttpStatus::constantName(404); // 'NOT_FOUND'

// List all codes
$all = HttpStatus::all();
```

## Files

- `src/HttpStatus.php` — constants and helpers
- `examples/example.php` — small usage example

## Contributing

Contributions welcome. Add more codes or helper utilities as needed.

## Running tests

Run the project's tests locally (after cloning/installing dependencies):

```bash
composer install
composer test
# or directly with PHPUnit:
php vendor/bin/phpunit --configuration phpunit.xml
```

Expected output (example):

```
OK (4 tests, 12 assertions)
```
