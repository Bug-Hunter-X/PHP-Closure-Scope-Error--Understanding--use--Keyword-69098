In PHP, a common yet subtle error arises when dealing with variable scope within nested functions or closures.  Consider this example:

```php
function outerFunction() {
  $outerVar = 'Hello';

  $innerFunction = function () use ($outerVar) {
    echo $outerVar; 
  };

  $innerFunction();
}

outerFunction();
```

This seems straightforward. However, if `use ($outerVar)` is omitted, the inner function will search for `$outerVar` in its own scope, leading to a notice or an undefined variable error, depending on PHP's error reporting settings. This is especially confusing for those new to closures or those coming from languages with automatic variable hoisting.