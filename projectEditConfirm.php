<?php require_once('userLayout_login.php'); ?>
<?php
$pid = $_POST['pid'];
$powner = $_POST['powner'];
$ptitle = $_POST['ptitle'];
$pcategory = $_POST['pcategory'];
$pgoal = $_POST['pgoal'];
$ptarget = $_POST['ptarget'];
$pimg = $_POST['pmainimg'];
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
        <h4 class="titletext">ProjectEdit Confirmation</h4>
    </div>
    <hr>
<table class="table table-hover" style="width: 60vw;">
        <thead>
        <tr>
            <th>項目</th>
            <th>内容</th>
        </tr>
    </thead>
    <form action="projectEditClose.php" method="post">
        <tbody>
        <tr>
            <td><p>Id</p></td>
            <td><input name="peid" type="text" value="<?= $pid ?>" style="border:none; background-color: rgb(248,250,252);width: 20vw;"></input></td>
        </tr>
        <tr>
            <td><p>owner</p></td>
            <td><input name="peowner" type="text" value="<?= $powner ?>" style="border:none; background-color: rgb(248,250,252);width: 20vw;"></input></td>
        </tr>
        <tr>
            <td><p>タイトル</p></td>
            <td><input name="petitle" type="text" value="<?= $ptitle ?>" style="border:none; background-color: rgb(248,250,252);width: 35vw;"></input></td>
        </tr>
        <tr>
            <td><p>カテゴリ</p></td>
            <td><input name="pecategory" type="text" value="<?= $pcategory ?>" style="border:none; background-color: rgb(248,250,252);width: 20vw;"></input></td>
        </tr>
        <tr>
            <td><p>概要・ゴール</p></td>
            <td><textarea name="pegoal" rows="4" style="border:none; background-color: rgb(248,250,252);width: 35vw;"><?= $pgoal ?></textarea></td>
        </tr>
        <tr>
            <td><p>目標金額</p></td>
            <td><input name="peamount" type="number" value="<?= $ptarget ?>" style="border:none; background-color: rgb(248,250,252);width: 20vw;"></input></td>
        </tr>
        <tr>
            <td><p>メイン画像</p></td>
            <td><input name="peimg" type="text" value="<?= $pimg ?>" style="border:none; background-color: rgb(248,250,252);width: 20vw;"></input></td>
        </tr>
        <tr>
            <td><p>OtherDescription</p></td>
            <td><textarea name="pedes" rows="4" style="border:none; background-color: rgb(248,250,252);width: 35vw;"><?= $pdes ?></textarea></td>
        </tr>
        </tbody>
    </table>
<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Confirm"></input>
</form>
</section>

</body>
</html>