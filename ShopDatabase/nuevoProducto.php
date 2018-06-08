<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $idProducto = mysqli_real_escape_string($db,$_POST['idProducto']);
    $tipo = mysqli_real_escape_string($db,$_POST['tipo']);
    $informacion = mysqli_real_escape_string($db,$_POST['informacion']);

    $sql = "INSERT INTO Producto (idProducto, Tipo, Informacion) VALUES ('$idProducto', '$tipo', '$informacion')";
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
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Insert New Producto</b></div>

        <div style = "margin:30px">

            <form action = "" method = "post">
                <label>ID Producto  :</label><br /><input type = "text" name = "idProducto" class = "box"/><br /><br />
                <label>Tipo  :</label><br /><input type = "text" name = "tipo" class = "box"/><br /><br />
                <label>Informacion  :</label><input type = "text" name = "informacion" class = "box" /><br/><br />
                <input type = "submit" value = " Submit "/><br />

            </form>

        </div>

    </div>

</div>

</body>
</html>