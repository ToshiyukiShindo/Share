<?php require_once('userLayout.php'); ?>
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
        <h4 class="titletext">User Entry</h4>
    </div>
    <hr>

<form class="userentry" action="userEntryConfirm.php" method="post">
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">UserName</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="username" placeholder="Enter your name">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">User NickName</label>
    <input type="text" class="form-control" id="exampleFormControlInput0" name="usernick" placeholder="Any char you like">
  </div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput2" name="useremail" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Password</label>
  <input type="password" class="form-control" id="exampleFormControlInput3" name="userpass">
</div>
<input type="submit" class="btn btn-info btn-sm h-50" role="button" style="margin-top: 20px;" value="Entry"></input>
</form>
</section>

</body>
</html>