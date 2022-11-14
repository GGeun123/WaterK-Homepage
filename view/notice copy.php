<?php include("includes/database.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/notice.css" rel="stylesheet" />
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
      <h2>공지사항</h2>
      <table class="table">
        <thead>
          <tr>
            <td class="number">NUM</td>
            <td class="title">제 목</td>
            <td class="writer">작성자</td>
            <td class="date">작성일</td>
          </tr>
        </thead>
        
        <?php
					$notice_sql = "SELECT * FROM dbo.notice order by number desc";
					$notice_result = sqlsrv_query($con, $notice_sql);
					$total = sqlsrv_num_rows($notice_result);

					for ($i = 0; $i < $total; $i++) {
						$row = sqlsrv_fetch_array($notice_result);
					?>
        <tbody>
          <tr>
            <td width="70"><?=$number ?></td>
            <td width="500"><a href="notice_read.php?number=<?php echo $number ?>"><?=$title ?></a></td>
            <td width="120"><?=$name ?></td>
            <td width="100"><?php echo $date ?></td>
          </tr>
        </tbody>
        <?php }?>
      </table>

      <?php if(($_SESSION['id']) == "admin"){ ?>
        <!-- 글쓰기 -->
        <div class="button">
          <button onclick="window.location.href='notice-art.php'"><a>작성하기</button>
        </div>
      <?php } ?>

      <!-- scroll -->
      <?php include("includes/scroll.php");?>
    </div>
  </div>
  <?php include ("includes/footer.php") ?>
</body>
</html>