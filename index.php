<?php

require __DIR__ . "/Cocinero.php";
require __DIR__ .  "/Repartidor.php";

//Hacemos el llamado a la variable estática
echo Cocinero::$hora_entrada . "<br>";
//Fin del llamado a la variable estática

$ruben = new Cocinero();
$ruben->nombre = ' Dario';
$ruben->hora_salida = '13:00';
$ruben->apellidos = 'Chaname';

echo $ruben->saludoCumpleanios();
echo $ruben->calcularHorasTrabajadas();
echo "<br>";

$dario = new Repartidor();
$dario->nombre = "Dario";
$dario->apellidos = 'Perez';
echo $dario->saludoCumpleanios();

echo "<pre>";
var_dump($ruben, $dario);
echo "</pre>";