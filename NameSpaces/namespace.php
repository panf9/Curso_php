<?php

require_once __DIR__ . "/Erick/Usuario.php";
require_once __DIR__ . "/Hector/Usuario.php";
require_once __DIR__ . "/Marco/Usuario.php";

//Problema de colisión de nombres

//Le debamos un alias a nuestros namespaces
use \MarcoAntonio\Usuario;
use Erick\Usuario as Autenticacion;
use Hector\Usuario as Permiso;

//Para instanciar estas clases que se repiten en cada directorio lo hacemos anteponiendo el nameSpace a
$alexander = new Autenticacion();
echo $alexander->login();
echo "<br>";

$nelzon = new Permiso();
echo $nelzon->registrador();
echo "<br>";

$lazaro = new Usuario();
echo $lazaro->verificarPermiso();
echo "<br>";

echo "Todo ok...!";