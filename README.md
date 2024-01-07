# Composer Starter Pack

[![Build Status](https://github.com/siktec-lab/composer-starter-pack/actions/workflows/validate_test.yml/badge.svg?branch=main)](https://github.com/siktec-lab/composer-starter-pack/actions/workflows/validate_test.yml)

This is a starter pack for a composer package. It includes a composer.json file with some basic settings and a README.md file with some basic information about the package.
The boilerplate also includes phpunit and PHP_CodeSniffer for testing and code quality.

## Included:
- [PHPUnit](https://github.com/sebastianbergmann/phpunit/)
- [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer)
- [Additional PHPCS rules from 'slevomat'](https://github.com/slevomat/coding-standard)

## More information:
- [composer.json](https://getcomposer.org/doc/04-schema.md) Is set to PSR-4 and autoloads the src folder
- [Github Actions](https://docs.github.com/en/actions) Is set to run phpunit and phpcs
- [Gitingore](https://git-scm.com/docs/gitignore) for composer and vscode
- [License](https://choosealicense.com/licenses/) Is set to MIT

## Installation
- Using composer create-project:
```bash
composer create-project siktec/composer-starter-pack
# Edit composer.json and README.md to fit your needs
composer install
# Run tests
composer test
# Good to start coding
```
- Using git:
```bash
git clone https://github.com/siktec-lab/composer-starter-pack <project-name>
```
- Using Github template: `Click on 'Use this template' and follow the instructions`

## Composer Scripts
- `composer test` Runs phpunit tests from the tests folder with the phpunit.xml config file
- `composer test-coverage` Runs phpunit tests from the tests folder with the phpunit.xml config file and generates a coverage report in the coverage folder
- `composer testdox` Same as `composer test` but with a more readable output and colors
- `composer phpcs` Runs phpcs with the config phpcs.xml
- `composer phpcs-colors` Same as `composer phpcs` but with colors
- `composer phpcs-fix` Runs phpcbf to fix code style
- `composer phpcs-report` Runs phpcs and saves the result in phpcs.result
```bash
$ composer run-script --list
scripts:
  php-version   Show php version
  test          Run phpunit tests configuration phpunit.xml
  test-coverage Run phpunit tests with coverage
  testdox       Run phpunit tests with testdox and colors
  phpcs         Run phpcs against /src
  phpcs-colors  Run phpcs with colors
  phpcs-fix     Run phpcbf against /src to check for fixes
  phpcs-report  Run phpcs and save result to phpcs.result
```

## Cheat Sheet
- Installing / Updating / Removing packages: 
```bash
    # Install all packages - composer install
    composer install

    # Install a package - composer require <package-name>
    composer require siktec/composer-starter-pack
    
    # Update a package - composer update <package-name>
    composer update siktec/composer-starter-pack
    composer update # Update all packages
    
    # Remove a package - composer remove <package-name>
    composer remove siktec/composer-starter-pack
```

- List / Checking whats installed:
```bash
    # List all installed packages - composer show
    composer show
    composer show | grep package-name # Search for a package

    # List all installed packages with details - composer show -a
    composer show -a

    # Get details about a package - composer show <package-name>
    composer show siktec/composer-starter-pack
```

- Running scripts:
```bash

    # List all scripts with descriptions:
    composer run-script --list

    # Run a script - composer run-script <script-name> or composer <script-name>
    composer run-script test
    composer test

    # Run a script with arguments - composer <script-name> -- <arguments>
    # the -- is needed to pass arguments to the script as composer will try to parse the arguments as composer options
    composer test -- --filter testFunctionName
```
- Run a composer script: `composer run-script <script-name>` or `composer <script-name>`
- Run a composer script with arguments: `composer <script-name> -- <arguments>`
- Run a composer script with arguments and options: `composer <script-name> -- <arguments> --<options>`
