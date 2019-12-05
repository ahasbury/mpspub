<?php
header('Location:main.php');

$perkey = $_POST['perkey'];





setcookie("key", "$perkey", time() + (86400 * 365), "/");
fopen ("./perkey/$perkey", 'w');


?>
