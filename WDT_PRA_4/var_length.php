<?php
function sum(...$numbers) {
  $res = 0;
  foreach($numbers as $n) {
      $res+=$n;
    }
  return $res;
}
echo(sum(1,2,3,4)."\n<br>");
echo(sum(5,6,1));
?>