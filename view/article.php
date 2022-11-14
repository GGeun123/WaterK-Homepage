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
      <h2>보도 자료</h2>
      <div class="about_active">
        <div class="active">
          <div class="active_form">
          <?php
            $article_sql = "SELECT * FROM article order by number desc";
            $article_result = sqlsrv_query($con, $article_sql, $params, $options);
            $total = sqlsrv_num_rows($article_result);

            for ($i = 0; $i < $total; $i++) {
              $article_row = sqlsrv_fetch_array($article_result);
              $article_photo = $article_row['photo'];
              $article_number = $article_row['number'];
              $article_title = $article_row['title'];
              $article_date = $article_row['date']->format('Y/m/d');
				  ?>
            <div class="active_content">
              <div class="actice_img"><img src='./upload/<?=$article_photo ?>' alt='img'/></div>
              <div class="active-box">
                <p class="box-title"><a href="article_read.php?number=<?= $article_number ?>"><?=$article_title ?></a></p>
                <p class="box-date"><?= $article_date ?></p>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
        <!-- 글쓰기 -->
        <?php if(($_SESSION['id']) == "admin"){ ?>
        <div class="button">
          <button onclick="window.location.href='article_write.php'"><a>작성하기</button>
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