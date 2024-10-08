# Contributing

You can contribute in several ways to the project:

* Propose documentation updates
* Propose features
* Report bugs

All these can be done through the issue tracker, don't hesitate!

You can also code your contribution away if you have the skills. It isn't all that hard if you are already a PHP developer:

* Fork the repository to your GitHub account
* Check it out on your machine
* Create a new branch (suggested)
* Code away
* Commit and open a PR

There are some restrictions though!

## Restrictions

* You must write a test for anything you add or change in terms of feature:
    * `FeatureTest.php` should contain a test about your changes.
    * `DependencyTest.php` should be updated with any new exception to ensure that further changes down the road don't break anything.
    * `VarianceTest.php` should be updated if you create any new tags or exceptions that replace another one so that you can prove you are not breaking any old code through covariant or contravariant changes.
    
* Your code must be documented:
    * In the docs.
    * In the code files.

* Your code must be clean and well formatted:
    * You can run `composer run lint` to see what is not well formatted.
    * You can run `composer run fix` to fix all linting errors.
    
* All tests must pass, you can run `composer run test` on your machine beforehand.

## Approval process

* We will look at the changes and ask for changes directly on the PR.
* Please read the PR template properly beforehand as it contains all information posted here regarding the restrictions.
* We reserve the right to refuse any modification, but we will gladly incorporate well thought changes proposed to us.
