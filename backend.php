<?php

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'head.php' ?>
</head>
<body>
    <div class="container">
    
        <?php require 'navbar.php' ?>

        <div class="alert alert-danger" role="alert">
            No estas autorizado en este sistema <a href="register.php" class="alert-link">Registrate!</a>
        </div>

        <h1>HOLA ADMIN!</h1>

    </div>
    <?php include_once 'scripts.php'; ?>
</body>
</html>