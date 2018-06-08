<?php
include('session.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to my Shop</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="cajaWelcome">
    <h1>Welcome <?php echo $login_session; ?></h1>
    <h2><a href = "selectInsert.php">Choose Insert Option</a></h2>
    <h2><a href = "nuevoTipo.php">Add New Tipo</a></h2>
    <h2><a href = "deleteTipo.php">Delete Tipo</a></h2>
    <h2><a href = "logout.php">Sign Out</a></h2>
</div>
</body>

</html>