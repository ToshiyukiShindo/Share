<?php require_once('userLayout_login.php'); ?>
<?php
$uemail4 = $_POST['useremail2'];
$pid4 = $_POST['pid'];
$psid4 = $_POST['psid'];
$stitle4 = $_POST['s_title'];
$samount4 = $_POST['s_amount'];
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
        <h4 class="titletext">YourSupport Confirmation</h4>
    </div>
    <hr>
    <table class="table table-hover" style="width: 60vw;">
        <thead>
            <tr>
                <th>項目</th>
                <th>内容</th>
            </tr>
        </thead>
        <form class="userentry" action="userSupportThanks.php" method="post">
        <tbody>
        <tr>
            <td><p>YourEmail</p></td>
            <td><input name="usemail3" type="text" value="<?= $uemail4 ?>" style="border:none; background-color: rgb(248, 250, 252);width: 25vw;"></input></td>
        </tr>
        <tr>
            <td><p>ProjectId</p></td>
            <td><input name="uspid3" type="number" value="<?= $pid4 ?>" style="border:none; background-color: rgb(248 250 252);width: 25vw;"></input></td>
        </tr>
        <tr>
            <td><p>SupportId</p></td>
            <td><input name="uspsid3" type="number" value="<?= $psid4 ?>" style="border:none; background-color: rgb(248 250 252);width: 25vw;"></input></td>
        </tr>
        <tr>
            <td><p>SupportTitle</p></td>
            <td><input name="ustitle3" type="text" value="<?= $stitle4 ?>" style="border:none; background-color: rgb(248,250,252);width: 25vw;"></input></td>
        </tr>
        <tr>
            <td><p>サポート金額</p></td>
            <td><input name="usamount3" type="number" value="<?= $samount4 ?>" style="border:none; background-color: rgb(248,250,252);width: 25vw;"></input></td>
        </tr>
        </tbody>
    </table>
    <div>
        <p>プロジェクトオーナーに応援のメッセージをお願いします！</p>
        <textarea name="message" id="message" class="form-control"  cols="50" rows="4">応援してます！</textarea>
    </div>
<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Confirm"></input>
</form>
</section>

</body>
</html>