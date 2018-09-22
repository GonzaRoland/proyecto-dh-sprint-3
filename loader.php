<?php

require 'Classes/JSONDB.php';
require 'Classes/User.php';
require 'Classes/Producto.php';
require 'Classes/Validator.php';
require 'Classes/Auth.php';
//require 'Classes/JSONDB.php';

// 1 - Base de datos
$usersDb = new JSONDB("users.json");
//$usersDb = $usersDb->dbConnect();

// 1 - Base de datos
$productsDb = new JSONDB("products.json");

//2 - Validator
$validator = new Validator();

//3 - Authentication
$auth = new Auth();