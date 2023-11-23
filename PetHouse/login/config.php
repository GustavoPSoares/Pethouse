<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword ='Jesus100%';
    $dbName = 'pet_house';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errono)
    {
        echo"erro";
    }
  

?>