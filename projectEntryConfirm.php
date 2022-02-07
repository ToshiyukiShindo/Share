<?php require_once('userLayout_login.php'); ?>
<?php
$powner = $_POST['powner'];
$ptitle = $_POST['ptitle'];
$pcategory = $_POST['pcategory'];
$pgoal = $_POST['pgoal'];
$ptarget = $_POST['ptarget'];
$pimg = $_FILES['pmainimg']['name'];
$pdes = $_POST['pdescription'];
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
        <h4 class="titletext">ProjectEntry Confirmation</h4>
    </div>
    <hr>
<table class="table table-hover" style="width: 60vw;">
        <thead>
        <tr>
            <th>項目</th>
            <th>内容</th>
        </tr>
    </thead>
    <form action="projectEntryClose.php" method="post">
        <tbody>
        <tr>
            <td><p>owner</p></td>
            <td><input name="peowner" type="text" value="<?= $powner ?>" style="border:none; background-color: rgb(248 250 252);width: 250px;"></input></td>
        </tr>
        <tr>
            <td><p>タイトル</p></td>
            <td><input name="petitle" type="text" value="<?= $ptitle ?>" style="border:none; background-color: rgb(248 250 252);width: 450px;"></input></td>
        </tr>
        <tr>
            <td><p>カテゴリ</p></td>
            <td><input name="pecategory" type="text" value="<?= $pcategory ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        <tr>
            <td><p>概要・ゴール</p></td>
            <td><input name="pegoal" type="textarea" rows="4" value="<?= $pgoal ?>" style="border:none; background-color: rgb(248 250 252);width: 450px;"></input></td>
        </tr>
        <tr>
            <td><p>目標金額</p></td>
            <td><input name="peamount" type="number" value="<?= $ptarget ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        <tr>
            <td><p>メイン画像</p></td>
            <td><input type="text" name="peimg" value="/php_04/asset/<?= $_FILES['pmainimg']['name'] ?>" style="border:none; background-color: rgb(248 250 252);width: 450px;"></input></td>
        </tr>
        <tr>
            <td><p>OtherDescription</p></td>
            <td><input name="pedes" type="textarea" rows="4" value="<?= $pdes ?>" style="border:none; background-color: rgb(248 250 252);width: 450px;"></input></td>
        </tr>
        </tbody>
    </table>
<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Confirm"></input>
</form>
</section>

</body>
</html>