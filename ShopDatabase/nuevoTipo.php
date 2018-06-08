<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $nombreTipo = mysqli_real_escape_string($db,$_POST['nombreTipo']);
    $descripcion = mysqli_real_escape_string($db,$_POST['descripcion']);
    $idProducto = mysqli_real_escape_string($db,$_POST['idProducto']);

    $sql = "INSERT INTO Tipo (Nombre, Descripcion, idProducto) VALUES ('$nombreTipo', '$descripcion', '$idProducto')";
    $result = mysqli_query($db,$sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($db));
        exit();
    }

    $count = mysqli_num_rows($result);


    if($result) {
        header("location: welcome.php");
    }else {
        $error = "¡Something went wrong!";
        echo "<script type='text/javascript'>alert('$error');</script>";
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
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Insert New Tipo</b></div>

        <div style = "margin:30px">

            <form action = "" method = "post">
                <label>Nombre  :</label><br /><input type = "text" name = "nombreTipo" class = "box"/><br /><br />
                <label>Descripcion  :</label><input type = "text" name = "descripcion" class = "box" /><br/><br />
                <label>ID Producto  :</label><input type = "text" name = "idProducto" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />

            </form>

        </div>

    </div>

</div>

</body>
</html>