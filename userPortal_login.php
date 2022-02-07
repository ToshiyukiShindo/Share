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
    $message = "";}
else {
    $message = $_SESSION['login']."さん、ようこそ！";
    }

// プロジェクト情報の取得
try{
    $pdo = connect();
    $statement = $pdo->prepare('SELECT * FROM `projects` LEFT JOIN (SELECT `project_id`, sum(support_amount), count(user_email) FROM `user_supports` GROUP BY `project_id`) AS `pjsum` ON projects.id = pjsum.project_id');
    $statement->execute();
        $resultpj1 = $statement->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e){
    // echo "Itemsデータの取得に失敗しました。";
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
    <p style="font-size: 20px;font-weight: bold;padding: 0 0 0 5px"><?= $message ?></p>
    <h3>対処法図鑑</h3>
    <hr>
    <div class="list">
    <?php foreach($resultpj1 as $record){ ?>
        <div class="card" style="width: 18rem;">
            <img src="<?= $record['imageurl']?>" class="card-img-top" alt="..." style="height: 200px; object-fit:cover;">
            <div class="card-body">
                <h5 class="card-title"><a href="projectmovie.php"><?= $record['title']?></a></h5>
                <p class="card-text"><?= $record['category']?></p>
            </div>
        </div>
        <?php } ?>
    </div>
    </section>

</body>
</html>