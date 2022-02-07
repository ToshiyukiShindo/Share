<?php require_once('userLayout.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    return $pdo;
}
?>
<?php
session_start();
if (!isset($_SESSION["login"])) {
    $message = "";}
else {
    $message = $_SESSION['login']."さん、ようこそ！";
    }
$message = htmlspecialchars($message);

    $useremail = $_SESSION['login'];
    $pdo = connect();
    $pid = $_POST['pid0'];
    $sqledit = "SELECT * FROM `projects` LEFT JOIN (SELECT `project_id`, sum(support_amount), count(user_email) FROM `user_supports` GROUP BY `project_id`) AS `pjsum` ON projects.id = pjsum.project_id WHERE `id` LIKE :id";
    $statement = $pdo->prepare("$sqledit");
    $statement->bindValue(':id',$pid,PDO::PARAM_INT);
    $statement->execute();
    $resultDis = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
    $pdo = connect();
    $pid2 = $_POST['pid0'];
    $sqlsup = "SELECT * FROM `project_support` WHERE `project_id` LIKE :id2";
    $statement = $pdo->prepare("$sqlsup");
    $statement->bindValue(':id2',$pid2,PDO::PARAM_INT);
    $statement->execute();
    $resultsup = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
    $pdo = connect();
    $pid3 = $_POST['pid0'];
    $sqlus = "SELECT * FROM `user_supports` WHERE `project_id` LIKE :id3";
    $statement = $pdo->prepare("$sqlus");
    $statement->bindValue(':id3',$pid3,PDO::PARAM_INT);
    $statement->execute();
    $resultsus = $statement->fetchAll(PDO::FETCH_ASSOC);
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
<section class="container3">
<section class="leftpage">
    <div>
        <div class="detailtitle">
            <h1><?= $resultDis[0]['title'] ?></h1>
            <p><span class="category"><?= $resultDis[0]['category'] ?></span></p>
        </div>
        <img src="<?= $resultDis[0]['imageurl'] ?>" alt="" style="width: 80%;object-fit: cover;">
    </div>
    <div class="summary">
        <p></p>
        <h4>Owner：<?= $resultDis[0]['owner'] ?></h4>
        <hr>
        <h4>目標・ゴール：<br><?= $resultDis[0]['goal'] ?></h4>
        <hr>
        <h4>その他：<br><?= $resultDis[0]['otherdescription'] ?></h4>
        <hr>
    </div>

    <h4 style="margin-top: 100px;">サポーターメッセージ</h4>
    <hr>
    <?php foreach($resultsus as $record){ ?>
    <div>
        <p>name: <?= $record['user_email'] ?></p>
        <p><?= $record['message'] ?></p>
    </div>
    <hr>
    <?php } ?>
</section>

<!-- ページ右半分 -->
<section class="rightpage">
    <div class="space"></div>
    <div class="abstraction">
        <h2>現在総計：
        <?php
            if(isset($resultDis[0]['sum(support_amount)'])){
                echo $resultDis[0]['sum(support_amount)'];
            } else { echo 0;}?>
            (<?= floor($resultDis[0]['sum(support_amount)']/$resultDis[0]['target']*100)?>%)
        </p>
        </h2>
        <hr>
        <h2>サポート回数：
        <?php
        if(isset($resultDis[0]['count(user_email)'])){
                echo $resultDis[0]['count(user_email)'];
            } else { echo 0;}?></p>
        </h2>
        <hr>
        <div class="likebtn">
        <form action="projectDetail_like.php" method="post">
            <input type="button" class="btn btn-outline-danger" value="お気に入り" style="margin: 20px 0;"></input>
        </form>
        <form action="projectDetail_notlike.php" method="post">
            <input type="button" class="btn btn-outline-danger" value="cancel" style="margin: 20px 0;"></input>
        </form>
        </div>
    </div>
    <hr>

    <!-- supportを表示 -->
    <form action="userSupportConfirm.php" method="post">
    <?php foreach($resultsup as $record){ ?>
    <div class="abstraction">
    <div class="card">
        <div class="card-header">
            Support Items
        </div>
            <div class="card-body">
                <img src="<?=$record['s_imageurl']?>" alt="" style="height: 150px; width: 150px; object-fit:cover;margin-bottom: 20px"><br>
                <div class="support">
                    <p>Title:</p><input type="text" value="<?=$record['support_title']?>" name="stitle2" class="card-title" style="border:none; width: 20vw;background-color:white;" disabled></input>
                </div>
                <div class="support">
                    <p>サポート額：</p><input type="number" value="<?=$record['support_amount']?>" name="samount2" class="card-text"  style="border:none; width: 20vw;background-color:white;" disabled></input>
                </div>
                <div>
                    <p>概要：</p><textarea rows="2" class="card-text"  style="border:none; width: 30vw;background-color:white;" disabled><?=$record['description']?></textarea>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</form>
</section>
</section>
</body>
</html>