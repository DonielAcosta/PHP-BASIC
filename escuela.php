<?php

$escuela = array(

  array(
    "Nombre" => "garfield",
    "Ocupacion" => "Programador",
    "Color" => "Naranja con rayas",
    "Comidas" => array(
      "Favorita" => "lasaña, atun, camaron",
      "No Favoritas" => "mani, aguacate"
    )
  ),

  array(
    "Nombre" => "natzu",
    "Ocupacion" => "Programador php",
    "Color" => "Naranja ",
    "Comidas" => array(
      "Favorita" => "pan, cambur, camaron",
      "No Favoritas" => "remolacha, care, aguacate"
    )
  ),
);

$garfield = $escuela[1];

echo "las comidas preferidas de garfield" .$garfield['Comidas']['Favorita'];
echo "\n";