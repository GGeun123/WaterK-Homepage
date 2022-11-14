<?php include("includes/database.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/board_read.css" rel="stylesheet" />
    <title>e-waterkorea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="js/main.js" defer></script>
</head>
<body>
  <!-- navigation -->
  <?php include("includes/nav.php");?>

  <!-- selection -->
  <div class="meta-header">
    <div class="meta-content">
      <h1>문의 사항</h1>
    </div>
  </div>
  <?php include("includes/select.php");?>
  <!-- section -->
  <div class="wrap">
    <div class="container">
      <div class="read_box">
          <div class="form-toal">
            <p><img src="assects/img/house.svg"> 문의사항 > 공지사항</p>
            <h2>문의사항</h2>
            <hr>
          </div>
          <?php
            $number = $_GET['number']; /* bno함수에 num값을 받아와 넣음*/
            $sql = "SELECT * FROM board where number =$number";
            $result = sqlsrv_query($con, $sql, $params, $options);
            $rows = sqlsrv_fetch_array($result);
          
            $board_date = $rows['date']->format('Y/m/d');
            sqlsrv_close($con);
          ?>
        <div class="table">
          <div class="table-title">
            <h4><?php echo $rows['title'] ?></h4>
            <hr>
          </div>
          <?php if(($_SESSION['id']) == "admin"){ ?>
          <div class="table-info">
            <ul>
              <li>작성자: <?php echo $rows['id'];?></li>
              <li>작성일: <?= $board_date ?></li>
              <hr>
            </ul>
          </div>
          <div class="table-content">
            <?php echo nl2br($rows['content']) ?><br><br>
            이메일 : <?php echo $rows['email'] ?><br>
            전화번호 : <?php echo $rows['tel'] ?>
          </div>
          <?php } ?>
          <?php
          if(($_SESSION['id']) == "" || ($_SESSION['id']) != "admin"){
            echo "<script>alert('읽는 권한이 없습니다.')</script>";
            echo "<script>location.replace('board.php');</script>";
            exit;
          }
            ?>
          <hr>
        </div>
      </div>
      <div class="button">
        <button onclick="window.location.href='board.php'"><a>목록으로</a></button>
        <?php if(isset ($member['role == admin'])){ ?>
          <form class="form-btn" action="board_update.php" method="get">
            <input type="hidden" name="number" value="<?=$_GET['number'] ?>">
            <input class="btn" type="submit" value="update">
          </form>
          <form class="form-btn" action="board_delete.php" method="post">
            <input type="hidden" name="number" value="<?=$_GET['number'] ?>">
            <input class="btn" type="submit" value="delete">
          </form>
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php include("includes/footer.php"); ?>

<!-- scroll -->
<?php include("includes/scroll.php");?>
</body>
</html>