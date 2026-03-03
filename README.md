# Brave ACF

[![Code Style](https://github.com/yardinternet/brave-acf/actions/workflows/format-php.yml/badge.svg?no-cache)](https://github.com/yardinternet/brave-acf/actions/workflows/format-php.yml)
[![PHPStan](https://github.com/yardinternet/brave-acf/actions/workflows/phpstan.yml/badge.svg?no-cache)](https://github.com/yardinternet/brave-acf/actions/workflows/phpstan.yml)
[![Tests](https://github.com/yardinternet/brave-acf/actions/workflows/run-tests.yml/badge.svg?no-cache)](https://github.com/yardinternet/brave-acf/actions/workflows/run-tests.yml)

## Requirements

- [Acorn](https://github.com/roots/acorn) >= 4.0

## Features

- [x] Register ACF Field groups from config
- [x] Register ACF Forms from config
- [x] Register ACF Option pages from config

## Installation

To install this package using Composer, follow these steps:

1. Install this package with Composer:

    ```sh
    composer require yard/brave-acf
    ```

2. Run the Acorn WP-CLI command to discover this package:

    ```shell
    wp acorn package:discover
    ```

You can publish the config file with:

```shell
wp acorn vendor:publish --provider="Yard\Acf\AcfServiceProvider"
```

## Usage

This package leverages [wp-acf-registrar](https://github.com/yardinternet/wp-acf-registrar) for registration of field groups, forms and option pages.
Add your custom acf classes to the [configuration file](./config/acf.php) to register them automatically.

## About us

[![banner](https://raw.githubusercontent.com/yardinternet/.github/refs/heads/main/profile/assets/small-banner-github.svg)](https://www.yard.nl/werken-bij/)
