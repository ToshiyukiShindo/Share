<?php require_once('userLayout.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
?>
<?php
try{
    $pdo = connect();
    $uname2 = $_POST['uname'];
    $unick2 = $_POST['unick'];
    $uemail2 = $_POST['uemail'];
    $upass2 = $_POST['upass'];
    $uhashedpass = password_hash($upass2, PASSWORD_DEFAULT);
    $sqluser = "INSERT INTO `users`(`id`, `username`, `nickname`, `useremail`, `password`) VALUES (NULL,'$uname2','$unick2','$uemail2','$uhashedpass')";
    $statement = $pdo->prepare("$sqluser");
    $statement->execute();
    $message="登録に成功しました。";
} catch (PDOException $e){
  $message="登録に失敗しました。";
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
        <p>ご登録ありがとうございました！</p>
        <div><a class="btn btn-info btn-sm" href="userPortal.php" role="button" style="height: 2rem; width: 80px;">Home </a></div>
    </section>
</body>
</html>