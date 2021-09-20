<?php
$x = 2;
$y = 3;
$z = 5;
echo $x . " " . $y . " " . $z.'<br>';
$x++; echo $x.'<br>'; //zmienna x zwiększa się o 1 i wynosi 3
$y--; echo $y.'<br>'; //zmienna y zmiejsza się o 1 i wynosi 2
$z += $x; echo $z.'<br>'; //do zmiennej z dodajemy 3 i wynosi 8
--$z; echo $z.'<br>'; //zmienna z pomniejszamy przed jej wywołaniem i wynosi 7


?>