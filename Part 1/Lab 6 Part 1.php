<?php

for($i = 1; $i < 101; $i++)
{
  echo "<tr>";
  for($j = 1; $j < 101; $j++)
  {
    echo "<td>", multiply($i, $j), "</td>";
  }
  echo "</tr>";
}

function multiply($x, $y)
{
  $z = $x * $y;
  return $z;
}

?>
