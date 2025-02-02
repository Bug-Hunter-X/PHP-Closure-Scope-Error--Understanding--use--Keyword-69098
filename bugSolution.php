The solution is straightforward: use the `use` keyword within the closure to explicitly import the outer variable.

```php
function outerFunction() {
  $outerVar = 'Hello';

  $innerFunction = function () use ($outerVar) {
    echo $outerVar; 
  };

  $innerFunction();
}

outerFunction(); // Outputs: Hello
```

By including `use ($outerVar)`, we explicitly tell the inner function to use the `$outerVar` from the parent function's scope. This prevents the undefined variable error and ensures correct behavior.