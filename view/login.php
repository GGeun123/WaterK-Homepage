<?php include("includes/database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/login.css" rel="stylesheet" />
    <title>e-waterkorea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="js/main.js" defer></script>
    <script src="js/scroll.js" defer></script>
</head>
<body>
  <!-- navigation -->
  <?php include("includes/nav.php");?>

  <!-- selection -->
  <div class="wrap">
    <div class="login">
      <div class="login-box">
        <h2>로그인</h2>
        <form action="login_action.php" method="POST">
        <div class="login-info">
          <div class="login-detail">
            <ul>
              <li class="list-title">ID</li>
              <li class="list-info"><input class="form-control" type="text" name="id" placeholder="아이디를 입력하세요."></li>
            </ul>
            <ul>
              <li class="list-title">PWD</li>
              <li class="list-info"><input class="form-control" type="password" name="pwd" placeholder="비밀번호를 입력하세요."></li>
            </ul>
          </div>
          <div class="button"> 
            <button class="btn btn-warning">로그인</button>
            <a class="btn" href="join.php">회원가입</a>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <?php include ("includes/footer.php") ?>
</body>
</html>