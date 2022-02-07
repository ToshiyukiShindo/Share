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
    <title>Document</title>
</head>
<body>
<section class="container2">
<p style="font-size: 20px;font-weight: bold;margin: 5px 0 0 5px"><?= $message ?></p>
    <div class="title">
        <h4 class="titletext">動画診断 (1/2)</h4>
    </div>
    <hr>
    <div class="list">
    <label><input class="checkbox" type="checkbox" value="a" id="tag1"><span>カテゴリ１</span></label>
    <label><input class="checkbox" type="checkbox" value="b" id="tag2"><span>カテゴリ２</span></label>
    <label><input class="checkbox" type="checkbox" value="c" id="tag3"><span>カテゴリ３</span></label>
    </div>
    <div style="margin: 20px 0;">
        <button type="button" class="btn btn-info" id="transbtn" style="border-bottom: 5px;">次へ</button>
    </div>
</section>
<script src="../php_08/transition.js"></script>
</body>
</html>