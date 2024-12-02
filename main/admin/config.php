<?php
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "demo_ivymoda");
$conn = mysqli_connect('localhost', 'root', '', 'demo_ivymoda') 
         or 
            die ('Không thể kết nối tới database');

?>
