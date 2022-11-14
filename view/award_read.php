<?php include("includes/database.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/notice_read.css" rel="stylesheet" />
    <title>e-waterkorea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="js/main.js" defer></script>
    <script src="js/scroll.js" defer></script>
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
            <p><img src="assects/img/house.svg"> 문의사항 > 수상 및 활동</p>
            <h2>수상 및 활동</h2>
            <hr>
          </div>
        <div class="table">
        <?php
            $number = $_GET['number']; /* bno함수에 num값을 받아와 넣음*/
            $sql = "SELECT * FROM award where number =$number";
            $result = sqlsrv_query($con, $sql);
            $rows = sqlsrv_fetch_array($result);
          
            $award_date = $rows['date']->format('Y/m/d');
            sqlsrv_close($con);
          ?>
          <div class="table-title">
            <h4><?php echo $rows['title'] ?></h4>
            <hr>
          </div>
          <div class="table-info">
            <ul>
              <li>작성자: <?php echo $rows['name'] ?></li>
              <li>작성일: <?=$award_date ?></li>
              <hr>
            </ul>
          </div>

          <div class="table-img" style="text-align: center;">
            <img src='./upload/<?=$rows['photo'] ?>' alt='img'/>
          </div>
          <div class="table-content" style="text-align: center; margin-top: 50px;">
            <?php echo nl2br($rows['content']) ?>
          </div>
          <hr>
        </div>
      </div>
      <div class="button">
        <button onclick="window.location.href='award.php'"><a>목록으로</a></button>
        
        <?php if(isset ($_SESSION['id']) and $_SESSION['role'] == ['id']){ ?>
        <?php if(isset ($_GET['number'])){ ?>
          <form action="award_update.php" method="post">
            <input type="hidden" name="number" value="<?=$_GET['number'] ?>">
            <input type="submit" value="update">
          </form>
          <form action="award_delete.php" method="post">
            <input type="hidden" name="number" value="<?=$_GET['number'] ?>">
            <input type="submit" value="delete">
          </form>
        <?php } ?>
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