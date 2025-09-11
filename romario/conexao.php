<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "usuarios";

$conn = new mysqli($servidor,$usuario,$senha,$dbname);
if ($conn->$connect_error){
    die("Falha no servidor".$conn->connect_error);
}

?>
