<?php
session_start();
// print_r($_SESSION);
// print_r('<br>');
include_once ('conexao.php');

if ((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    header('location:logcad.php');
    //Teste de funcionamento sessão abaixo
    // print_r('<br>');
    // print_r('não há sessão ativa');
    // print_r('<br>');
} else {
    $logged = $_SESSION['username'];

    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM users WHERE id like '%$data%' or comp_name LIKE '%$data%' or user_name LIKE '%$data%' or pass_word LIKE '%$data%' ORDER BY id DESC;";
    } else {
        $sql = "SELECT * FROM users ORDER BY id DESC;";
    }
    //Teste de funcionamento sessão abaixo
    // print_r('<br>');
    // print_r('há sessão ativa');
    // print_r('<br>');
    // print_r($logged);


    $result = $connection->query($sql);

    // print_r($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/2ea3cef66d.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body style="background:#C0C0C0;">
    <header>
        <ul style="list-style-type: none; background-color: #ff000a;">
            <li style="text-align: end; margin: 0 5% 0 0">
                <h4><a href="logout.php" class="logout">Logout</a></h4>
            </li>
            <li>
                <h3 style="color: #C0C0C0">
                    <?php
                    echo "Bem vindo, " . $logged;
                    ?>
                </h3>
            </li>
    </header>
    <?php echo ('<h6>' . $_SESSION['username'] . '</h6>'); ?>
    <?php echo ('<h6>' . $_SESSION['password'] . '</h6>'); ?>
    <div style="display: flex; justify-content:center;gap:0.1%" class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="search">
        <button onclick="searchData()" class="btn btn-primary">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </div>
    <!-- <a href="login.php"><button>Login</button></a> -->
    <div style="opacity:0.9;" class="m-5">
        <table class="table table-dark table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Completo</th>
                    <th scope="col">Nome De Usuário</th>
                    <th scope="col">Senha</th>
                    <th scope="col">. . .</th>

                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['comp_name'] . "</td>";
                    echo "<td>" . $user_data['user_name'] . "</td>";
                    echo "<td>" . $user_data['pass_word'] . "</td>";
                    echo "<td><a class='m-1 btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'><i class='fa-regular fa-pen-to-square'></i></a>";
                    echo "<a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'><i class='fa-regular fa-trash-can'></i></a></td>";

                }
                ?>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>
    </div>
</body>
<script>
    var search = document.getElementById('search');

    search.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

    function searchData() {
        window.location = 'main.php?search=' + search.value;
    }
</script>

</html>

<!--     // 16:31 #2                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 -->