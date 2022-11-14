<?php
  include("includes/database.php");

  $title = $_POST['title'];               //Title
  $name = $_POST['name'];                   //Writer
  $content = $_POST['content'];           //Content
  $date = date('Y-m-d H:i:s');
  $URL = './article.php';                   //return URL


  // 파일 업로드
  $photo = $_FILES['photo'];

  $uploadDir = "./upload/";
  $fileName = $photo['name'];
  $tmpName = $photo['tmp_name'];

  $fileNames = array();

  for($i=0; $i<count($fileName); $i++){
    move_uploaded_file($tmpName[$i], $uploadDir.$fileName[$i]); // 디렉토리에 저장하기
    array_push($fileNames, $fileName[$i]); // 가공해서 배열에 넣기
    $arrayString = implode(",", $fileNames); // 배열을 문자열로 만들기
  }

  $query = "INSERT INTO article (title, content, name, date, photo) 
            values('$title', '$content', '$name', '$date' ,'$arrayString')";

  $result = sqlsrv_query($con, $query);

  if ($result) {
  ?>
    <script>
      alert("<?php echo "게시글이 등록되었습니다." ?>");
      location.replace("<?php echo $URL ?>");
    </script>
  <?php
  } else {
    echo "게시글 등록에 실패하였습니다.";
  }
    
  sqlsrv_close($con);
?>