<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<!-- nos ejecuta por url el archivo hola.php, llamados eventos
GET o por url
POST cuerpo
-->
<a href="hola.php?nombre=juan&apellido=castro">voy a hola</a>
<?php
require_once "modelo/empleado.php";
require_once "modelo/jornalero.php";
echo "empleados</br>";
$nombreEmpleado = "Suarez";
$edadEmpleado = 25;
$diasTrabajados = 25;
$jornal = 1000; #25;
//llama al constructor
$empleado = new Jornalero($nombreEmpleado, $edadEmpleado, $diasTrabajados, $jornal);
echo $empleado->getNombre();
echo 'bolsón<br/>';
//echo $empleado->calcularBolson();
echo $empleado->calcularSueldo();
//depurar codigo
//var_dump($empleado);
?>
  <p>Programacion orientada a objetos en php</p>
</body>

</html>
