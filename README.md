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
composer create-project --prefer-dist jeroen-g/composer-starter-pack my-package
```

## Composer Scripts
- ```composer test``` Runs phpunit tests that are located in the tests folder and have the suffix Test.php
- ```composer cs``` Runs phpcs on the src folder
- ```composer cs-fix``` Runs phpcbf on the src folder
- ```composer cs-fix-dry``` Runs phpcbf in dry mode on the src folder