<?php require_once('userLayout_login.php'); ?>
<?php
function connect(){
    $pdo = new PDO('mysql:dbname=gs-project;port=3306;host=localhost;charset=utf8','root','root');
    return $pdo;
}
?>
<?php
    $pdo = connect();
    $pid = $_POST['pid'];
    $sqledit = "SELECT * FROM `projects` WHERE `id` LIKE :id";
    $statement = $pdo->prepare("$sqledit");
    $statement->bindValue(':id',$pid,PDO::PARAM_INT);
    $statement->execute();
    $resultEdit = $statement->fetchAll(PDO::FETCH_ASSOC);    

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
        <h4 class="titletext">Project Edit</h4>
    </div>
    <hr>
<form class="userentry" action="projectEditConfirm.php" method="post">
<div class="mb-3">
    <input type="number" class="form-control" id="exampleFormControlInput0" name="pid" value="<?= $resultEdit[0]['id'];?>" style="display: none;">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput0" class="form-label">owner</label>
    <input type="text" class="form-control" id="exampleFormControlInput0" name="powner" value="<?= $resultEdit[0]['owner'];?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">タイトル</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="ptitle" value="<?= $resultEdit[0]['title'];?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">カテゴリ</label>
    <input type="text" class="form-control" id="exampleFormControlInput2" name="pcategory" value="<?= $resultEdit[0]['category'];?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">概要・ゴール</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="pgoal" rows="4" ><?= $resultEdit[0]['goal'];?></textarea>
</div>
<div class="mb-3">
    <label for="exampleFormControlInput3" class="form-label">目標金額</label>
    <input type="number" class="form-control" id="exampleFormControlInput3" name="ptarget" value="<?= $resultEdit[0]['target'];?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">メイン画像</label>
    <input class="form-control" type="text" id="formFile" name="pmainimg" value="<?= $resultEdit[0]['imageurl'];?>">
</div>
<div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label">OtherDescription</label>
    <textarea class="form-control" id="exampleFormControlTextarea2" name="pdescription" rows="4" ><?= $resultEdit[0]['otherdescription'];?></textarea>
</div>


<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Edit"></input>
</form>
</section>

</body>
</html>