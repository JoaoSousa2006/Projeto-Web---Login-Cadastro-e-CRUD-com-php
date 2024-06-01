<?php
if (!empty($_GET['id'])) {
  include_once ('conexao.php');
  $id = $_GET['id'];
  $sqlSelect = "SELECT * from users WHERE id=$id";
  $result = $connection->query($sqlSelect);
  // print_r($result);


  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {
      $name = $user_data['comp_name'];
      $user = $user_data['user_name'];
      $pass = $user_data['pass_word'];
    }
    print_r('<br>'.$name);

  } else {
    header('location:main.php');
  }
}
?>
<!-- Descobrir o motivo das bublues estarem com tamanho não esférico no monitor extrerno -->
<!doctype html>
<html lang="en">

<head>
  <title>Webleb</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="logcad.css"> -->
</head>
<style>
  :root {
    --s: 0.5vh;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    padding: 0;
    height: 100vh;
    /* min-height: 100vh; */
    background: #0C192C;
    /* background: #fff; */
  }

  .containerbubbles {
    position: relative;
    width: 100%;
    height: 100%;
  }

  .bubbles {
    position: relative;
    display: flex;
  }

  .bubbles span {
    position: relative;
    width: 30px;
    height: 30px;
    background: #4FC3DC;
    margin: 0 4px;
    border-radius: 50%;
    box-shadow: 0 0 0 10px #4FC3DC44,
      0 0 50px #4FC3DC,
      0 0 100px #4FC3DC;
    animation: animate 15s linear infinite;
    animation-duration: calc(125s / var(--i));
  }

  .bubbles span:nth-child(even) {
    background: #FF2D75;
    box-shadow: 0 0 0 10px #FF2D7544,
      0 0 50px #FF2D75,
      0 0 100px #FF2D75;
  }

  @keyframes animate {
    0% {
      transform: translateY(100vh) scale(0);
    }

    100% {
      transform: translateY(-100vh) scale(1);
    }
  }
</style>

<style>
  body {
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    line-height: 1.7;
    color: #b1b1cf;
    /* background-color: #1f2029; */
    overflow: hidden;
    height: 100vh;
    /* background: radial-gradient(ellipse at bottom, #1B2735 0%, #12141d 100%);  */
  }

  a:hover {
    text-decoration: none;
  }

  .link {
    color: #FF6600;
  }

  .link:hover {
    transition: 1s;
    color: #FF5353;
  }

  p {
    font-weight: 500;
    font-size: 14px;
  }

  h4 {
    font-weight: 600;
  }

  h6 span {
    padding: 0 20px;
    font-weight: 700;
  }

  .section {
    position: relative;
    width: 100%;
    display: flexbox;
  }

  .full-height {
    min-height: 100vh;
  }

  [type="checkbox"]:checked,
  [type="checkbox"]:not(:checked) {
    display: none;
  }

  .checkbox:checked+label,
  .checkbox:not(:checked)+label {
    position: relative;
    display: block;
    text-align: center;
    width: 60px;
    height: 16px;
    border-radius: 8px;
    padding: 0;
    margin: 10px auto;
    cursor: pointer;
    background-color: #b5bcdd;
  }

  .checkbox:checked+label:before,
  .checkbox:not(:checked)+label:before {
    position: absolute;
    display: block;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #3a58f3;
    background-color: #1B2735;
    border: solid 1px #2a2f4b;
    font-family: 'unicons';
    content: '\eb4f';
    z-index: 20;
    top: -10px;
    left: -10px;
    line-height: 36px;
    text-align: center;
    font-size: 24px;
    transition: all 0.5s ease;
  }

  .checkbox:checked+label:before {
    transform: translateX(44px) rotate(-270deg);
  }

  .card-3d-wrap {
    position: relative;
    width: 440px;
    max-width: 100%;
    height: 400px;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    perspective: 800px;
    margin-top: 60px;
  }

  .card-3d-wrapper {
    width: 100%;
    height: 100%;
    position: absolute;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    transition: all 600ms ease-out;
  }

  .card-front,
  .card-back {
    width: 100%;
    height: 100%;
    background-color: #333742;
    background-image: url('/img/pattern_japanese-pattern-2_1_2_0-0_0_1__ffffff00_000000.png');
    position: absolute;
    border-radius: 6px;
    -webkit-transform-style: preserve-3d;
  }

  .card-back {
    /* transform: rotateY(180deg); */
  }

  .card-front {}

  .checkbox:checked~.card-3d-wrap .card-3d-wrapper {
    /* transform: rotateY(180deg); */
  }

  .center-wrap {
    position: absolute;
    width: 100%;
    padding: 0 35px;
    top: 50%;
    left: 0;
    transform: translate3d(0, -50%, 35px) perspective(100px);
    z-index: 20;
    display: block;
  }

  .form-group {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
  }

  .form-style {
    padding: 13px 20px;
    padding-left: 55px;
    height: 48px;
    width: 100%;
    font-weight: 500;
    border-radius: 4px;
    font-size: 14px;
    line-height: 22px;
    letter-spacing: 0.5px;
    outline: none;
    color: #c4c3ca;
    background-color: #1f2029;
    border: none;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
  }

  .form-style:focus,
  .form-style:active {
    border: none;
    outline: none;
    box-shadow: 0 4px 8px 0 rgba(21, 21, 21, .2);
  }

  .input-icon {
    position: absolute;
    top: 0;
    left: 18px;
    height: 48px;
    font-size: 24px;
    line-height: 48px;
    text-align: left;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
  }

  .btn {
    border-radius: 4px;
    height: 44px;
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    -webkit-transition: all 200ms linear;
    transition: all 200ms linear;
    padding: 0 30px;
    letter-spacing: 1px;
    display: -webkit-inline-flex;
    display: -ms-inline-flexbox;
    display: inline-flex;
    align-items: center;
    background-color: #ffffaf;
    color: #000000;
  }

  .btn:hover {
    transition: 3s;
    background-color: #000000;
    color: #ffffaf;
    box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
  }
</style>

<body>
  <h2><a href="main.php">Back</a></h2>
  <div class="section">
    <div class="containerbubbles">
      <div class="bubbles">
        <span style="--i:11;"></span>
        <span style="--i:12;"></span>
        <span style="--i:24;"></span>
        <span style="--i:10;"></span>
        <span style="--i:14;"></span>
        <span style="--i:23;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
        <span style="--i:20;"></span>
        <span style="--i:22;"></span>
        <span style="--i:25;"></span>
        <span style="--i:18;"></span>
        <span style="--i:21;"></span>
        <span style="--i:15;"></span>
        <span style="--i:13;"></span>
        <span style="--i:26;"></span>
        <span style="--i:17;"></span>
        <span style="--i:13;"></span>
        <span style="--i:18;"></span>
        <span style="--i:16;"></span>
        <span style="--i:19;"></span>
      </div>

      <label for="reg-log"></label>
      <div class="card-3d-wrap mx-auto">
        <!-- Cadastro -->
        <div class="card-back">
          <div class="center-wrap">
            <div class="section text-center">
              <h4 class="mb-3 pb-3">Edit Register</h4>
              <div class="form-group">
                <form accept-charset="utf-8" action="saveEdit.php" method="post">
                  <fieldset>
                    <input value="<?php echo ($id)?>" name="id" type="hidden">
                    <input value="<?php echo ($name) ?>" type="text" name="comp_name" class="form-style"
                      placeholder="Full Name" required>
                    <i class=" input-icon uil uil-user"></i>
              </div>
              <div class="form-group mt-2">
                <input value="<?php echo ($user) ?>" type="text" name="user_name" class="form-style"
                  placeholder="User Name" required>
                <i class="input-icon uil uil-at"></i>
              </div>
              <div class="form-group mt-2">
                <input value="<?php echo ($pass) ?>" rows="6" name="pass_word" type="password"
                  class="form-style" placeholder="Password" required>
                <!-- Aprenda como EDITAR REGISTROS com PHP #04
                        12:00
                  funcão de editar, seleção de sexo -->
                <i class="input-icon uil uil-lock-alt"></i>
              </div>
              </fieldset>
              <button type="submit" name="update" id="update" s class="btn mt-4">Save Changes</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>