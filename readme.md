# Voyager Calendar Events

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
<a href="https://styleci.io/repos/138236160/shield?style=flat"><img src="https://styleci.io/repos/138236160/shield?style=flat" alt="Build Status"></a>


Laravel Voyager Calendar Events BREAD. 
## Installation

Via Composer

``` bash
$ composer require codelabs/voyagercalendarevents
```

## Usage

Publish the config file (choose `voyagercalendarevents.config`)
``` bash
php artisan vendor:publish 
```
Seed the Voyager database tables
``` bash
php artisan db:seed --class="Codelabs\VoyagerCalendarEvents\Database\Seeds\DatabaseSeeder"     
```
Done!
## Change log

* Initial Development

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email shawn@codelabs.ca instead of using the issue tracker.

## Credits

- [Shawn Mayzes](https://codelabs.ca)
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/codelabs/voyagercalendarevents.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/codelabs/voyagercalendarevents.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/codelabs/voyagercalendarevents/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/138236160/shield

[link-packagist]: https://packagist.org/packages/codelabs/voyagercalendarevents
[link-downloads]: https://packagist.org/packages/codelabs/voyagercalendarevents
[link-travis]: https://travis-ci.org/codelabs/voyagercalendarevents
[link-styleci]: https://styleci.io/repos/138236160
[link-author]: https://github.com/codelabs
[link-contributors]: ../../contributors]
