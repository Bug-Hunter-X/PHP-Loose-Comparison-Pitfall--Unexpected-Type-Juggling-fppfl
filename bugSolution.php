The solution is to use the strict comparison operator (`===`), which checks both value and type.  This prevents type juggling and ensures accurate results.

```php
<?php
$a = 0;
$b = 'abc';

if ($a === $b) {
  echo '$a is equal to $b';
} else {
  echo '$a is not equal to $b';
}
?>
```

With strict comparison, the output will correctly indicate that `$a` is not equal to `$b`, as their types are different.