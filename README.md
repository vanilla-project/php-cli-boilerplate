# Vanilla PHP Command Line Project

This repository shows a basic setup for a command line application in PHP.


## Getting Started

PHP 7 or above and Composer is expected to be installed on our system.

### Installing Composer

For instructions on how to install Composer visit https://getcomposer.org/download/

### Installing

After cloning this repository, change into the newly created directory and run

```
composer install
```

This will install all dependencies needed for the project.


## Running the Tests

All tests can be run by executing

```
vendor/phpunit/phpunit/phpunit
```

`phpunit` will automatically find all tests inside the `tests` directory and run them based on the configuration in the `phpunit.xml` file.


### Testing Approach

The test for class `Greeting` is only verifying the return value of one method.


## Running the Application

To run the application execute `bin/hello.php "World"` or `php hello.php "World"`.
You should see the text &ldquo;Hello World&rdquo; being printed.

```
$: bin/hello.php "World"
Hello World
```


## Built With

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [PHPUnit](https://phpunit.de/)


## License

This project is licensed under the MIT License - see the [LICENCE.md](LICENCE.md) file for details.
