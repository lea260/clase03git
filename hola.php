<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- embebeber codigo de php
GET a traves de las etiquetas a href= indica que ejecutar
POST formulatios indicando PO-->
<?php var_dump($_GET);
$var = "nombre";
$nombrePersona = $_GET['nombre'];
$nombrePersonaPorUnaVariable = $_GET[$var];
?>
<ul>
  <li><b>nombrePersona:</b>  <?php echo $nombrePersona; ?> </li>
  <li><b>nombrePersonaPorUnaVariable:</b><?php echo $nombrePersonaPorUnaVariable; ?></li>
  <li></li>
  <li></li>
  <li></li>
</ul>


<?php echo "es un hola desde php"; ?>
</body>
</html>
