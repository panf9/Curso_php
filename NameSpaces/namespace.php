<?php

require_once __DIR__ . "/Erick/Usuario.php";
require_once __DIR__ . "/Hector/Usuario.php";
require_once __DIR__ . "/Marco/Usuario.php";

//Problema de colisión de nombres

//Para instanciar estas clases que se repiten en cada directorio lo hacemos anteponiendo el nameSpace a
$alexander = new \Erick\Usuario();
echo $alexander->login();
echo "<br>";

$nelzon = new \Hector\Usuario();
echo $nelzon->registrador();
echo "<br>";

$lazaro = new \MarcoAntonio\Usuario();
echo $lazaro->verificarPermiso();
echo "<br>";

echo "Todo ok...!";