<?php
include_once ('conexao.php');

if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['comp_name'];
    $user = $_POST['user_name'];
    $pass = $_POST['pass_word'];

    $sqlUpdate = "UPDATE users SET comp_name='$name',user_name='$user',pass_word='$pass' WHERE id = '$id'";


    $result = $connection->query($sqlUpdate);

}
header('location:main.php');
