<?php

$host= "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port  = 3306;


try{
    $conn = new PDO("mysql:host = $host; dbname =" . $dbname, $user, $pass);
    //echo  "Conexão com a base de dados realizada com sucesso!";
}
catch(PDOException $err){
    echo "Erro: Conenexão com o banco de dados não realizada!" . $err->getMessage();
}
