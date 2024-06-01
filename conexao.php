<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'cadlog';

$connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if($connection->connect_errno){echo "Erro";}else echo "Conexão efetuada";