<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $dni = mysqli_real_escape_string($db,$_POST['dni']);
    $nombre = mysqli_real_escape_string($db,$_POST['nombre']);
    $apellido = mysqli_real_escape_string($db,$_POST['apellido']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $telefono = mysqli_real_escape_string($db,$_POST['telefono']);
    $idLocal = mysqli_real_escape_string($db,$_POST['idLocal']);

    $sql = "INSERT INTO Empleado (DNI, Nombre, Apellido, password, Telefono, idLocal) VALUES ('$dni', '$nombre', '$apellido','$password', '$telefono', '$idLocal')";
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
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Insert New Empleado</b></div>

        <div style = "margin:30px">

            <form action = "" method = "post">
                <label>DNI  :</label><br /><input type = "text" name = "dni" class = "box"/><br /><br />
                <label>Nombre  :</label><br /><input type = "text" name = "nombre" class = "box"/><br /><br />
                <label>Apellido  :</label><br /><input type = "text" name = "apellido" class = "box" /><br/><br />
                <label>Password  :</label><br /><input type = "password" name = "password" class = "box" /><br/><br />
                <label>Telefono  :</label><br /><input type = "text" name = "telefono" class = "box" /><br/><br />
                <label>ID Local  :</label><br /><input type = "text" name = "idLocal" class = "box" /><br/><br />
                <input type = "submit" value = "Sign Up"/><br />
            </form>

        </div>

    </div>

</div>

</body>
</html>