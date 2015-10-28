Writing Testable code in PHP
===================
This repository contains step by step source code demonstration for rewriting and refactoring code to make it loosely coupled and testable

## Instructions

```
# Install composer dependencies phpunit, mockery adn symfony/var-dumper
$ composer install

# Run tests
$ phpunit
```

## Steps
Start by cloning the [master](https://github.com/kabirbaidhya/TestableCode) branch that consists of untestable code and checkout to respective branches [step-1](https://github.com/kabirbaidhya/TestableCode/tree/step-1), [step-1](https://github.com/kabirbaidhya/TestableCode/tree/step-2) and so on. 

1. Refactor using Dependency Injection and SOLID principles properly and make it testable [[step-1](https://github.com/kabirbaidhya/TestableCode/tree/step-1)]
2. Organize the namespaces and directory structure [[step-2](https://github.com/kabirbaidhya/TestableCode/tree/step-2)]
3. Build concrete implementations of interfaces [TODO]

## Things to consider
While coding ensure these principles are not violated in order to make code testable, maintainable and loosely coupled.
 
* DRY (Don't Repeat Yourself)
* SOLID principles
    - Single Responsibility Principle
    - Open/Closed Principle 
    - Liskov substitution principle
    - Interface segregation principle
    - Dependency inversion principle
* Dependency Injection
* Separation of Concerns
* Ioc Containers (Optional)

## Useful Links and videos
Please go through these blog posts and videos to get a nice grasp of how to write testable code in PHP. 

* https://laracasts.com/collections/solid-principles
* http://fabien.potencier.org/what-is-dependency-injection.html
* https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design
* http://code.tutsplus.com/tutorials/how-to-write-testable-and-maintainable-code-in-php--net-31726
* http://code.tutsplus.com/tutorials/dependency-injection-huh--net-26903
* https://laracasts.com/collections/testing-in-php
* http://www.martinfowler.com/articles/injection.html
