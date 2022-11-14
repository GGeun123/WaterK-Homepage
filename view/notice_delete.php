<?php
  include("includes/database.php");

  settype($_POST['number'], 'integer');
  $filtered = array(
    'number'=>sqlsrv_real_escape_string($con, $_POST['number'])
  );

  $sql = "DELETE FROM notice WHERE number = {$filtered['number']}";
  $result = sqlsrv_query($con, $sql);
  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    error_log(sqlsrv_error($con));
  } else {
    echo '삭제되었습니다. <a href="notice.php">돌아가기</a>';
  }
?>

