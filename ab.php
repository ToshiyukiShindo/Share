<?php require_once('userLayout_login.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    return $pdo;
}
?>

<!-- ログイン情報の取得 -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header('location: userPortal.php');
}else {
    $message = $_SESSION['login']."さん、ようこそ！";
    }
$message = htmlspecialchars($message);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php_08/user.css">
    <title>Document</title>
</head>
<body>
<section class="container2">
<p style="font-size: 20px;font-weight: bold;margin: 5px 0 0 5px"><?= $message ?></p>
    <div class="title">
        <h4 class="titletext">動画診断 (2/2)</h4>
    </div>
    <hr>
    <p>ab</p>

    <!-- 問A -->
    <div style="margin: 40px 0;">
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1">
        <label class="form-check-label" for="flexRadioDefault1">
        １：項目A1点・項目B1点
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
        ２：項目B2点・項目C2点
        </label>
    </div>
    </div>

    <!-- 問B -->
    <div style="margin: 40px 0;">
    <select class="form-select" aria-label="Default select example" id="sel">
        <option value="1">A1点</option>
        <option value="2">B2点</option>
        <option value="3">C3点</option>
    </select>
    </div>

    </div>
    </div>


    <div style="margin: 20px 0;">
        <button type="button" class="btn btn-info" id="culbtn" style="border-bottom: 5px;">次へ</button>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">項目A</th>
      <th scope="col">項目B</th>
      <th scope="col">項目C</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">得点</th>
      <td id="item1"></td>
      <td id="item2"></td>
      <td id="item3"></td>
    </tr>
  </tbody>
</table>



</section>

<script src="../php_08/culculate.js"></script>
</body>
</html>