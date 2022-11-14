<?php include("includes/database.php"); 
  session_start();
  $id = $_POST['id'];
  $pwd = $_POST['pwd'];

  //중복 아이디 검사
  $query ="SELECT * FROM member where id='$id' AND pwd='$pwd'";
  $result = sqlsrv_query($con, $query);
  $row = sqlsrv_fetch_array($result);

   //결과가 존재하면 세션 생성
   if ($row != null) {
    $_SESSION['id'] = $row['id'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['role'] = $row['role'];
    echo "<script>location.replace('index.php');</script>";
    exit;
 }
 
 //결과가 존재하지 않으면 로그인 실패
 if($row == null){
    echo "<script>alert('ID 혹은 Password가 옯바르지 않습니다.')</script>";
    echo "<script>location.replace('login.php');</script>";
    exit;
 }
 ?>