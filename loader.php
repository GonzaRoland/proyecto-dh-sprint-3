<?php

require 'Classes/JSONDB.php';
require 'Classes/User.php';
require 'Classes/Producto.php';
require 'Classes/Validator.php';
require 'Classes/Auth.php';

$usersDb = new JSONDB("users.json");
$productsDb = new JSONDB("products.json");
$validator = new Validator();
$auth = new Auth();