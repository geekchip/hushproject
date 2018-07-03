<?php
define('BASE_PATH', 'http://localhost/phpproject/webservices');
define('DB_HOST', 'localhost');
define('DB_NAME', 'project');
define('DB_USER', 'proj');
define('DB_PASSWORD','1234');
$con = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(mysqli_connect_errno()){
    echo('Failed to connect'.mysqli_connect_errno());
    exit();
}
?>