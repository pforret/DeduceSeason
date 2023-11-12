# deduce season from date and location

Github: 
![GitHub tag](https://img.shields.io/github/v/tag/pforret/DeduceSeason)
![Tests](https://github.com/pforret/DeduceSeason/workflows/Run%20Tests/badge.svg)

Packagist: 
[![Packagist Version](https://img.shields.io/packagist/v/pforret/deduceseason.svg?style=flat-square)](https://packagist.org/packages/pforret/deduceseason)
[![Packagist Downloads](https://img.shields.io/packagist/dt/pforret/deduceseason.svg?style=flat-square)](https://packagist.org/packages/pforret/deduceseason)

![](assets/unsplash.seasons.jpg)

deduce season from date and location (latitude)

## Installation

You can install the package via composer:

```bash
composer require pforret/deduceseason
```

## Usage

``` php
$season = DeduceSeason::fromDateAndLatitude('2020-01-01', 52.336) // DeduceSeason::SEASON_WINTER
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email author_email instead of using the issue tracker.

## Credits

- [Peter Forret](https://github.com/pforret)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
