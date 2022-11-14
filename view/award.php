<?php include("includes/database.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/award.css" rel="stylesheet" />
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
      <h2>수상 및 활동</h2>
      <div class="about_active">
        <div class="active">
          <div class="active_form">
            <?php
              $award_sql = "SELECT * FROM award order by number desc";
              $award_result = sqlsrv_query($con, $award_sql, $params, $options);
              $total = sqlsrv_num_rows($award_result);

              for ($i = 0; $i < $total; $i++) {
                $award_row = sqlsrv_fetch_array($award_result);
                $award_photo = $award_row['photo'];
                $award_number = $award_row['number'];
                $award_title = $award_row['title'];
                $award_date = $award_row['date']->format('Y/m/d');
            ?>
            <div class="active_content">
              <div class="actice_img"><img src='./upload/<?=$award_photo ?>' alt='img'/></div>
              <div class="active-box">
                <p class="box-title"><a href="#"><a href="award_read.php?number=<?=$award_number ?>"><?=$award_title ?></a></p>
                <p class="box-date"><?=$award_date ?></p>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
        <?php if(($_SESSION['id']) == "admin"){ ?>
        <!-- 글쓰기 -->
        <div class="button">
          <button onclick="window.location.href='award-art.php'"><a>작성하기</button>
        </div>
        <?php } ?>

        
      </div>
    </div>
    <!-- footer -->
    <?php include("includes/footer.php"); ?>

    <!-- scroll -->
    <?php include("includes/scroll.php");?>
  </div>
</body>
</html>