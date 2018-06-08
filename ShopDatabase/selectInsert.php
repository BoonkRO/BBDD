<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $option = $_POST['options'];
    $tipo = mysqli_real_escape_string($db,$_POST['tipo']);
    $empleado = mysqli_real_escape_string($db,$_POST['empleado']);
    $producto = mysqli_real_escape_string($db,$_POST['producto']);
    $stock = mysqli_real_escape_string($db,$_POST['stock']);

    switch ($option) {
        case "tipo":
            header("location: nuevoTipo.php");
            break;
        case "empleado":
            header("location: nuevoEmpleado.php");
            break;
        case "producto":
            header("location: nuevoProducto.php");
            break;
        case "stock":
            header("locatiom: welcome.php");

    }

}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Shop</title>


</head>

<body bgcolor = "#FFFFFF">

<div align = "center">
    <div style = "width:300px; border: solid 1px #333333; " align = "left">
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Choose table to insert content</b></div>

        <div style = "margin:30px">

            <form action = "" method = "post">
                <label>Choose option to insert :
                    <select name="options">
                        <option value="empleado" name="empleado">Empleado</option>
                        <option value="producto" name="producto">Producto</option>
                        <option value="tipo" name="tipo">Tipo</option>
                        <option value="stock" name="stock">Stock</option>
                    </select>
                </label>
                <input type = "submit" value = "submit"/><br />

            </form>

        </div>

    </div>

</div>

</body>
</html>