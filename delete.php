<?php
if (!empty($_GET['id'])) {
    include_once ('conexao.php');
    $id = $_GET['id'];
    $sqlSelect = "SELECT * from users WHERE id=$id";
    $result = $connection->query($sqlSelect);


    if ($result->num_rows > 0) {
        $sqlDelete = "DELETE FROM users WHERE id='$id'";
        $resultDelete = $connection->query($sqlDelete);
        }

    } 
    header('location:main.php');
    

?>