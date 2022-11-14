<?php include("includes/database.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/award-art.css" rel="stylesheet" />
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
  <div class="wrap">
    <div class="container">
      <div class="contact">
        <div class="form-toal">
          <p><img src="assects/img/house.svg"> 문의사항 > 보도자료</p>
          <h2>글쓰기</h2>
        </div>
        <form class="form" method="post" action="article_action.php" enctype="multipart/form-data">
          <table class="table">
            <tr>
              <td class="table-title">제목</td>
              <td class="table-info"><input class="form-control" type="text" name="title"></td>
            </tr>
            <tr>
              <td class="table-title">이름</td>
              <td class="table-info"><input class="form-control" type="text" name="name" value="관리자"></td>
            </tr>
            <tr>
              <td class="table-title">내용</td>
              <td class="table-info"><textarea class="form-content" name="content" rows="10"></textarea></td>
            </tr>
            <tr>
              <td class="table-title">사진첨부</td>
              <td class="table-info"><input type="file" name="photo[]" accept="image/*" multiple /></td>
            </tr>
          </table>
          <div class="form-btn">
            <input class="btn btn-warning" type="submit" value="제출">
            <input class="btn btn-warning" type="reset" value="리셋">
          </div>
        </form>
      </div>
    </div>
    <?php include("includes/scroll.php");?>
  </div>
  <?php include("includes/footer.php");?>
</body>
</html>