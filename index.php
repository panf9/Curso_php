<?php

require __DIR__ . "/Cocinero.php";
require __DIR__ .  "/Repartidor.php";

$ruben = new Cocinero();

$dario = new Repartidor();


echo "<pre>";
var_dump($ruben, $dario);
echo "</pre>";