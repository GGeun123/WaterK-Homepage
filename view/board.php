<?php include("includes/database.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/board.css" rel="stylesheet" />
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
      <h2>문의</h2>
      <table class="table">
        <thead>
          <label class="star">※ 문의에 대한 수정과 삭제는 <span>불가능</span>합니다.</label>
          <tr>
            <td class="num">NUM</td>
            <td class="title">제 목</td>
            <td class="writer">작성자</td>
            <td class="date">작성일</td>
          </tr>
        </thead>
        <?php
					$board_sql = "SELECT * FROM board order by number desc";
					$board_result = sqlsrv_query($con, $board_sql, $params, $options);
					$total = sqlsrv_num_rows($board_result);

					for ($i = 0; $i < $total; $i++) {
						$board_row = sqlsrv_fetch_array($board_result);
						$board_number = $board_row['number'];
            $board_title = $board_row['title'];
            $board_id = $board_row['id'];
            $board_date = $board_row['date']->format('Y/m/d');
				?>
        <tbody>
          <tr>
            <td width="70"><?=$board_number ?></td>
            <td width="500"><a href="board_read.php?number=<?php echo $board_number ?>"><?=$board_title ?></a></td>
            <td width="120"><?=$board_id ?></td>
            <td width="100"><?=$board_date ?></td>
          </tr>
        </tbody>
        <?php }?>
      </table>

      <!-- 글쓰기 -->
      <div class="button">
        <button onclick="window.location.href='board_write.php'"><a>작성하기</a></button>
      </div>
    </div>
  </div>
  <!-- scroll -->
  <?php include("includes/scroll.php");?>

  <!-- footer -->
  <?php include("includes/footer.php");?>
</body>
</html>