<?php
   define('DB_SERVER', 'localhost:5432');
   define('DB_USERNAME', 'postgres');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'account');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>