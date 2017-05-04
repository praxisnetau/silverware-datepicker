# SilverWare Datepicker Module

[![Latest Stable Version](https://poser.pugx.org/silverware/datepicker/v/stable)](https://packagist.org/packages/silverware/datepicker)
[![Latest Unstable Version](https://poser.pugx.org/silverware/datepicker/v/unstable)](https://packagist.org/packages/silverware/datepicker)
[![License](https://poser.pugx.org/silverware/datepicker/license)](https://packagist.org/packages/silverware/datepicker)

A polyfill module for the [SilverStripe v4][silverstripe-framework] `DateField` class to show a datepicker in
browsers which do not yet support the HTML5 date input.

<p align="center"><img src="https://s4.postimg.org/so97crpxp/datepicker.png" alt="Datepicker"></p>

## Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Configuration](#configuration)
- [Customisation](#customisation)
- [Issues](#issues)
- [Contribution](#contribution)
- [Attribution](#attribution)
- [Maintainers](#maintainers)
- [License](#license)

## Requirements

- [SilverStripe Framework v4][silverstripe-framework]

## Installation

Installation is via [Composer][composer]:

```
$ composer require silverware/datepicker
```

## Configuration

As with all SilverStripe modules, configuration is via YAML. Extensions to `LeftAndMain` are applied
via `config.yml`. You may also include the bundle files in your theme to make use of the polyfill in forms.

You can configure a default format and polyfill setting for `DateField` in the YAML:

```yaml
SilverStripe\Forms\DateField:
  default_datepicker_format: d MMM yyyy
  default_datepicker_polyfill: all
```

The configuration option `default_datepicker_format` is a standard [CLDR date format][cldr-date-format] which
will be applied by default to all `DateField` instances using the datepicker.

The configuration option `default_datepicker_polyfill` determines the default polyfill mode for `DateField` instances,
and will force the polyfill to be used on the specified device. Possible values are: `desktop`, `mobile`, `all`,
and `none`.

You can override these defaults on a per-instance basis of `DateField` by using the following methods:

```php
$field = DateField::create('MyDate', 'Date');
$field->setDatepickerFormat('d/MM/yyyy');
$field->setDatepickerPolyfill('mobile');
```

## Customisation

To customise the appearance of the date picker, first install the frontend dependencies with Yarn (or NPM):

```
$ cd silverware-datepicker
$ yarn install
```

Make your required changes to `_variables.scss` in the `client/src/styles` folder. Once you've
customised the variables, you'll need to compile the source files.

This module uses [webpack] for compiling and bundling frontend assets. A configuration file is provided with
the repo to allow you to get up and running straight away. To have webpack watch your files and compile
automatically, run:

```
$ yarn watch
```

When your customisations are ready for production, you may run the following to optimise the bundle files:

```
$ yarn build
```

## Issues

Please use the [GitHub issue tracker][issues] for bug reports and feature requests.

## Contribution

Your contributions are gladly welcomed to help make this project better.
Please see [contributing](CONTRIBUTING.md) for more information.

## Attribution

- Makes use of [better-dateinput-polyfill] by [Maksim Chemerisuk](https://github.com/chemerisuk).

## Maintainers

[![Colin Tucker](https://avatars3.githubusercontent.com/u/1853705?s=144)](https://github.com/colintucker) | [![Praxis Interactive](https://avatars2.githubusercontent.com/u/1782612?s=144)](http://www.praxis.net.au)
---|---
[Colin Tucker](https://github.com/colintucker) | [Praxis Interactive](http://www.praxis.net.au)

## License

[BSD-3-Clause](LICENSE.md) &copy; Praxis Interactive

[composer]: https://getcomposer.org
[silverstripe-framework]: https://github.com/silverstripe/silverstripe-framework
[issues]: https://github.com/praxisnetau/silverware-datepicker/issues
[better-dateinput-polyfill]: https://github.com/chemerisuk/better-dateinput-polyfill
[webpack]: https://webpack.js.org
[cldr-date-format]: http://cldr.unicode.org/translation/date-time

