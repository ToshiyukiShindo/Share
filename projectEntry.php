<?php require_once('userLayout_login.php'); ?>
<!-- ログイン情報の取得 -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    $message = "";}
else {
    $owner = $_SESSION['login'];
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

<section class="container">

<div class="title">
        <h4 class="titletext">Project Entry</h4>
    </div>
    <hr>
<form class="userentry" action="projectEntryConfirm.php" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">owner</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="powner" value="<?= $owner ?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">タイトル</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ptitle">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">カテゴリ</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pcategory">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">概要・ゴール</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="pgoal" rows="4"></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">目標金額</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="ptarget">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">メイン画像</label>
    <input class="form-control" type="file" id="formFile" name="pmainimg">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">OtherDescription</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="pdescription" rows="4"></textarea>
</div>


<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Entry"></input>
</form>
</section>

</body>
</html>