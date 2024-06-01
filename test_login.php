<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {

    include_once ('conexao.php');
    $user = $_POST['username'];
    $pass = $_POST['password'];


    $sql = "SELECT * FROM users WHERE user_name = '$user' AND pass_word = '$pass'";
    $result = $connection->query($sql);

    // print_r($sql);
    // print_r('<br>');
    // print_r($result);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        header('location: index.php');
    } else {
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header('Location: main.php');

    }
} else {
    header('location: index.php');
}
?>