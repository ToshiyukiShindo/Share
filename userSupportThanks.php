<?php require_once('userLayout_login.php'); ?>
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
    $usemail2 = $_POST['usemail3'];
    $uspid2 = $_POST['uspid3'];
    $uspsid2 = $_POST['uspsid3'];
    $ustitle2 = $_POST['ustitle3'];
    $usamount2 = $_POST['usamount3'];
    $umessage2 = $_POST['message'];
    $sqlusup = "INSERT INTO `user_supports`(`id`, `user_email`, `project_id`, `p_support_id`, `support_title`, `support_amount`, `message`, `created_at`) VALUES (NULL,'$usemail2','$uspid2','$uspsid2','$ustitle2','$usamount2','$umessage2', sysdate())";
    $statement = $pdo->prepare("$sqlusup");
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
        <p>ご支援ありがとうございました！</p>
        <div><a class="btn btn-info btn-sm" href="userPortal.php" role="button" style="height: 2rem; width: 80px;">Home </a></div>
    </section>
</body>
</html>