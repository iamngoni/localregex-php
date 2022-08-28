# LocalRegex (PHP)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/modestnerd/localregex.svg?style=flat-square)](https://packagist.org/packages/modestnerd/localregex)
[![Total Downloads](https://img.shields.io/packagist/dt/modestnerd/localregex.svg?style=flat-square)](https://packagist.org/packages/modestnerd/localregex)
![GitHub Actions](https://github.com/modestnerd/localregex/actions/workflows/main.yml/badge.svg)

LocalRegex is a collection of regex patterns particularly tailored for the Zimbabwean environment

## Installation

You can install the package via composer:

```bash
composer require modestnerd/localregex
```

## Usage
- all methods return a boolean as the result
```php
// Email
LocalRegex::isEmail($email);

// Mobile Numbers
LocalRegex::isEconet($number);
LocalRegex::isTelecel($number);
LocalRegex::isNetone($number);

// Check if it's either one of the three i.e. Econet, Telecel or Netone
LocalRegex::isZimMobile($number);

// Check if the mobile number is valid (not tied to Zimbabwe)
LocalRegex::isMobile($number);

// VoIP
LocalRegex::isAfricom($number);
LocalRegex::isDandemutande($number);
LocalRegex::isLiquid($number);
LocalRegex::isPowertel($number);
LocalRegex::isTelco($number);
LocalRegex::isTelone($number);
LocalRegex::isZarnet($number);

// Check if it's either one of the ones listed above
LocalRegex::isZimVoIP($number);

LocalRegex::isNationalId($id);
LocalRegex::isNumberPlate($numberPlate);
LocalRegex::isPassportNumber($passportNumber);
LocalRegex::isDriversLicense($license);

LocalRegex::isUrl('https://modestnerd.co')
LocalRegex::isPassword('P@55WoRD')

// Formatting Numbers
LocalRegex::formatNumber('0771234567', FormatType::CountryCode) // 263771234567
LocalRegex::formatNumber('0771234567', FormatType::CountryCodePlus) // +263771234567
LocalRegex::formatNumber('263771234567', FormatType::Regular) // 0771234567
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email iamngoni@modestnerd.co instead of using the issue tracker.

## Credits

-   [Ngonidzashe Mangudya](https://github.com/iamngoni)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
