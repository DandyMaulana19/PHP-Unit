# PHP Unit Project Documentation

## Overview

This project is designed to provide unit testing capabilities for PHP applications. It leverages PHPUnit to ensure code quality and reliability.

## Features

- Unit testing for PHP applications.
- Easy integration with existing projects.
- Customizable test cases.

## Requirements

- PHP 7.4 or higher.
- Composer installed on your system.
- PHPUnit library.

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```bash
   cd /Users/dandy/Dandy/PHP Unit
   ```
3. Install dependencies using Composer:
   ```bash
   composer install
   ```

## Usage

1. Write your test cases in the `tests` directory.
2. Run the tests using PHPUnit:
   ```bash
   ./vendor/bin/phpunit --bootstrap vendor/autoload.php test/CalculatorTest.php
   ```

## Project Structure

```
/src        - Contains the source code.
/tests      - Contains the test cases.
composer.lock - Tracks the exact versions of dependencies installed.
composer.json - Composer configuration file.
Readme.md   - Project documentation.
```
