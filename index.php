<?php 
  include "clases.php";

$deposito_materiales = new materiales();

$nuevo_auto = new coche(
  $deposito_materiales->extraer_metal(25), 
  $deposito_materiales->extraer_plastico(31),
  "Audi"
);

echo $nuevo_auto->rueda();
echo "<br>";
echo $nuevo_auto->parado();
echo "<br>La tarjeta dice:<br>";

echo "<p>";
foreach ($nuevo_auto->tarjeta() as $key => $cantidad) {
    echo $key." - ".$cantidad."</br>";
}
echo "</p>";


echo "<p>Datos del deposito</p>";

echo "Metal: ".$deposito_materiales->get_metal()."<br>";
echo "Plástico: ".$deposito_materiales->get_plastico()."<br>";


$deposito_materiales->set_plastico(8000);

echo "<p>Datos del deposito</p>";

echo "Metal: ".$deposito_materiales->get_metal()."<br>";
echo "Plástico: ".$deposito_materiales->get_plastico()."<br>";

