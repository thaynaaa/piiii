<?php

$texto = "Minha busca";

$texto = explode(" ", $texto);

echo $texto[0];
echo "<br>";
echo $texto[1];
echo "<br>";
echo count($texto);
echo "<br>";

for($i = 1; $i <= count($texto); $i++){
  echo "linha: ".$i."<br>";
}


 ?>
