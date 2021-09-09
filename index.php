<?php

require __DIR__ . "/Cocinero.php";
require __DIR__ .  "/Repartidor.php";

$ruben = new Cocinero();
$ruben->nombre = ' Dario';
$ruben->apellidos = 'Chaname';

echo $ruben->saludoCumpleanios();

$dario = new Repartidor();
$dario->nombre = "Dario";
$dario->apellidos = 'Perez';
echo $dario->saludoCumpleanios();

echo "<pre>";
var_dump($ruben, $dario);
echo "</pre>";