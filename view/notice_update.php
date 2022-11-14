<?php
$serverName = "106.10.107.2,1455";

$connectionOptions = array(
    "database" => "waterk", // 데이터베이스명
    "uid" => "sa",   // 유저 아이디
    "pwd" => "sejoongDB9778@$",    // 유저 비번
    "CharacterSet" => "UTF-8"
);
  $conn = sqlsrv_connect($serverName, $connectionOptions);
  $number = $_GET["number"];
  $date = date("Y-m-d"); 

	$sql = "select * from notice where number=$number";
  $result = sqlsrv_query($conn, $sql);
	$row = sqlsrv_fetch_assoc($result);

  sqlsrv_close($conn);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/notice-art.css" rel="stylesheet" />
    <title>e-waterkorea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="js/main.js" defer></script>
    <script src="js/scroll.js" defer></script>
</head>
<body>
<form method="post" action="notice_modify.php?number=<?=$number?>">
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
          <p><img src="assects/img/house.svg"> 문의사항 > 공지사항</p>
          <h2>공지사항</h2>
        </div>
        <form action="./notice_modify.php?number=<?$number; ?>" method="post">
          <table class="table">
            <input type="hidden" name="number" value="<?=$_GET['number']?>">
            <tr>
              <td class="table-title">제목</td>
              <td class="table-info"><input class="form-control" type="text" name="title" value="<?=$row['title']?>"></td>
            </tr>
            <tr>
              <td class="table-title">이름</td>
              <td class="table-info"><input class="form-control" type="text" name="name" value="<?=$row['name']?>"></td>
            </tr>
            <tr>
              <td class="table-title">내용</td>
              <td class="table-info"><input class="form-control" type="text" name="content" value="<?=$row['content']?>"></td>
            </tr>
            <tr>
              <td class="table-title">사진첨부</td>
              <td class="table-info"><input type="file" name="file"></td>
            </tr>
            <tr class="form-email">
              <td class="table-title">이메일</td>
              <td class="table-info">
                <input class="form-control" type="text" name="email"> @ 
                <select class="form-control" type="text" name="email">
                  <option value="naver.com">naver.com</option>
                  <option value="gmail.com">gmail.com</option>
                  <option value="daum.net">daum.net</option>
                </select>
              </td>
            </tr>
          </table>
          <div class="form-btn">
            <input class="btn btn-warning" type="submit" value="수정">
            <input class="btn btn-warning" type="reset" value="리셋">
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
<!-- footer -->
<?php include("includes/footer.php"); ?>

<!-- scroll -->
<?php include("includes/scroll.php");?>
</body>
</html>