Writing Testable Code in PHP
============================
This repository contains step-by-step demonstration for rewriting/refactoring code to make it loosely coupled and testable.

## Instructions
```
# Install composer dependencies
$ composer install

# Create a database for MySQL or Postgres. Import the respective schema in `data/sql` for your database.

# Make a copy of `config/config.dist.php` as config.php and fill in the required credentials.

# Run tests
$ phpunit
```

## Steps
The `master` branch contains all the steps and is the final thing.

Start from [step-0](https://github.com/kabirbaidhya/TestableCode/tree/step-0) then to [step-1](https://github.com/kabirbaidhya/TestableCode/tree/step-1), [step-2](https://github.com/kabirbaidhya/TestableCode/tree/step-2) and so on.

## Things to Consider
Try to ensure that these principles are not violated in order to make your code testable, maintainable and loosely coupled.
 
* DRY (Don't Repeat Yourself)
* SOLID Principles
    - Single Responsibility Principle
    - Open/Closed Principle 
    - Liskov Substitution Principle
    - Interface Segregation Principle
    - Dependency Inversion Principle
* Dependency Injection
* Separation of Concerns
* IoC Containers (Optional)

## Useful Links
Please go through these links to get a nice grasp of how to write testable code in PHP. 

* https://laracasts.com/series/solid-principles-in-php
* http://fabien.potencier.org/what-is-dependency-injection.html
* https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design
* http://code.tutsplus.com/tutorials/how-to-write-testable-and-maintainable-code-in-php--net-31726
* https://laracasts.com/series/phpunit-testing-in-laravel
* http://code.tutsplus.com/tutorials/dependency-injection-huh--net-26903
* http://www.martinfowler.com/articles/injection.html
* http://symfony.com/doc/current/book/testing.html
