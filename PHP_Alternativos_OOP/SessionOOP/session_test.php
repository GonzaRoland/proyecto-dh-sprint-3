<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    require 'Session.php';
        Session::start();

        Session::set('username', array(
            'nombre' => 'Rodo',
            'apellido' => 'Raskovsky',
            'email' => 'rodo@digitalhouse.com'
        ));

        // Session::set('Jorge', 'Rial');

        Session::display();

    ?>
    
</body>
</html>