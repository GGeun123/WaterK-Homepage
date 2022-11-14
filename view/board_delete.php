<?php
 $serverName = "106.10.107.2,1455";

 $connectionOptions = array(
     "database" => "waterk", // 데이터베이스명
     "uid" => "sa",   // 유저 아이디
     "pwd" => "sejoongDB9778@$",    // 유저 비번
     "CharacterSet" => "UTF-8"
 );
   $conn = sqlsrv_connect($serverName, $connectionOptions);

  settype($_POST['number'], 'integer');
  $filtered = array(
    'number'=>sqlsrv_real_escape_string($conn, $_POST['number'])
  );

  $sql = "
      DELETE
         FROM board
         WHERE number = {$filtered['number']}
  ";
  $result = sqlsrv_query($conn, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(mysqli_error($conn));
  } else {
    echo '삭제되었습니다. <a href="board.php">돌아가기</a>';
  }
?>

