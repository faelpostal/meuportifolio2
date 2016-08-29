<?php

function conectar()
{
    $pdo = new PDO('mysql:host=localhost;dbname=cake_db', 'root', '');
    return $pdo;
}
?>
