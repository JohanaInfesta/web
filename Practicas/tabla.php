<table style="border: 1px solid ">
  <?php

  echo "<tr>";
  for($c1=0; $c1<21; $c1++){
    echo"<th>";
    echo $c1;
    echo"</th>";
  }
  echo "</tr>";
  for($f1=1; $f1<21; $f1++){
    echo"<tr>";
    echo"<td>";
    echo $f1;
    echo"</td>";
    for($c2=1; $c2<21; $c2++){
      echo"<td>";
      echo $f1*$c2;
      echo"</td>";

    }
    echo "</tr>";
  }
  ?>
</table>

<?php
define('n1', '_GET["n1"]');
define('n2', '_GET["n2"]');
define('n3', '_GET["n3"]');

$resultado= n1*n2-n3;
echo n1*n2-n3 . "= $resultado";
 ?>
