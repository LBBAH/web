<?php
$pass = "hola contraseñaxd";

$options = [
    'cost' => 12,
];

$pswd = password_hash($pass, PASSWORD_BCRYPT);

echo $pswd;
?>