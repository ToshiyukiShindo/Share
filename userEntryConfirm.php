<?php require_once('userLayout.php'); ?>
<?php
$uname = $_POST['username'];
$unick = $_POST['usernick'];
$uemail = $_POST['useremail'];
$upass = $_POST['userpass'];

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
    <table class="table table-hover" style="width: 60vw;">
        <thead>
        <tr>
            <th>項目</th>
            <th>内容</th>
        </tr>
    </thead>
    <form action="userEntryThanks.php" method="post">
        <tbody>
        <tr>
            <td><p>UserName</p></td>
            <td><input name="uname" type="text" value="<?= $uname ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        <tr>
            <td><p>NickName</p></td>
            <td><input name="unick" type="text" value="<?= $unick ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        <tr>
            <td><p>Email</p></td>
            <td><input name="uemail" type="email" value="<?= $uemail ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        <tr>
            <td><p>Password</p></td>
            <td><input name="upass" type="password" value="<?= $upass ?>" style="border:none; background-color: rgb(248 250 252);"></input></td>
        </tr>
        </tbody>
    </table>
        <input class="btn btn-info btn-sm" type="submit" style="height: 2rem; width: 70px; margin-bottom: 20px" value="Confirm"></input>
    </form>
    </div>
        <div><a class="btn btn-info btn-sm" href="userPortal.php" role="button" style="height: 2rem; width: 70px;">Cansel</a></div>
    </section>
</body>
</html>