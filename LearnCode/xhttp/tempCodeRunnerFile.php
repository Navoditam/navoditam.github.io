<?php

function addNumbers2(int $a, int $b) {
  return $a + $b;
}
echo addNumbers2(5, 6);
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>