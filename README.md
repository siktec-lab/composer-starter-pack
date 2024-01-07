# Composer Starter Pack

This is a starter pack for a composer package. It includes a composer.json file with some basic settings and a README.md file with some basic information about the package.
The boilerplate also includes phpunit and PHP_CodeSniffer for testing and code quality.

## Included:
- [PHPUnit](https://github.com/sebastianbergmann/phpunit/)
- [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer)

## More information:
- [Github Actions](https://docs.github.com/en/actions) Is set to run phpunit and phpcs
- [Gitingore](https://git-scm.com/docs/gitignore) for composer and vscode
- [License](https://choosealicense.com/licenses/) Is set to MIT

## Installation

```bash
composer create-project siktec/composer-starter-pack
# Edit composer.json and README.md to fit your needs
composer install
# Run tests
composer test
# Good to start coding
```

## Composer Scripts
- `composer test` Runs phpunit tests from the tests folder with the phpunit.xml config file
- `composer test-coverage` Runs phpunit tests from the tests folder with the phpunit.xml config file and generates a coverage report in the coverage folder
- `composer testdox` Same as `composer test` but with a more readable output and colors
- `composer phpcs` Runs phpcs with the config phpcs.xml
- `composer phpcs-colors` Same as `composer phpcs` but with colors
- `composer phpcs-fix` Runs phpcbf to fix code style
- `composer phpcs-report` Runs phpcs and saves the result in phpcs.result

