<?php

// good
$a = !$b;
$a = !($b);
if (!$a || !($a)) {

}

// bad
$a = ! $b;
$a = ! ($b);
if (! $a || !  ($a)) {

}

?>
