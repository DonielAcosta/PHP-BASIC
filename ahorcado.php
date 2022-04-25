<?php

$lenguaje = ["c","c++", "java", "php"];

define("MAX_ATTEMPS",6);

echo "Juego del AHORCADO \n\n";

//iniciando 
$juego = $lenguaje[rand(0, 3)];
$juego = strtolower($juego);
$can_let =strlen($juego);
$empi = str_pad("", $can_let, "_");
$fallid = 0;

echo " la palabra tiene  $can_let letras \n \n";
echo $empi ."\n";


// escribir palabra
 $esc = readline("Escribe una letra : ");
 $esc = strtolower($esc);

 if(str_contains($juego, $esc)){

  //verificamos todas las ocurrencia de esta letra para resprasalas
  $offset = 0;
  while($can_let = strpos($juego, $esc, $offset) !== false){

    $empi[$can_let] = $esc;
    $offset = $can_let + 1;

  }
 }else{

   $attempts++;
   echo "Letra Incorrecta Te quedan .(MAX_ATTEMPS - $attempts) . intentos ";
 }
echo "\n";