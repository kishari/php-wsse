<?php
// Használni szeretnénk a letöltött interpreter-fájlt
require_once "WSDLInterpreter.php";
// Készítünk egy interpreter osztályt, amelynek megadjuk a WSDL elérhetőségét
$wsdl = new WSDLInterpreter("../wsdl/home.wsdl");
// Elmentjük az elkészített PHP osztályokat tartalmazó fájlt a 2. lépésben megadott mappába
$wsdl->savePHP("generated_classes/");
?>
