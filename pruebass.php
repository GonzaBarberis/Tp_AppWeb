<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pruebass.php" method="POST">
    <select name="seleccionar" id="sapopepe">
        <option value="1">A</option>     
        <option value="2">B</option>
        <option value="3">C</option>
    </select>
    <input type="submit" value="Testear" name="aceptar">
    </form>
   
</body>
</html>

<?php
       
    if (isset ($_POST['aceptar'])){
        $pagotipo = $_POST['seleccionar'];
        echo "<h1 style='font-size:40px;color:red'>$pagotipo</h1>";
        echo '<script src="canchas.js"></script>';
    }
        
?>