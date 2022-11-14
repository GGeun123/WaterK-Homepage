<?php
  $serverName = "106.10.107.2,1455";

  $connectionOptions = array(
      "database" => "waterk", // 데이터베이스명
      "uid" => "sa",   // 유저 아이디
      "pwd" => "sejoongDB9778@$",    // 유저 비번
      "CharacterSet" => "UTF-8"
  );
    $conn = sqlsrv_connect($serverName, $connectionOptions);

  $id = $_GET['id'];
  $pwd = $_GET['pwd'];
  $pwdchk = $_GET['pwdchk'];
  $name = $_GET['name'];
  $birth_yy = $_GET['birth_yy'];
  $birth_mm = $_GET['birth_mm'];
  $birth_dd = $_GET['birth_dd'];
  $tel_01 = $_GET['tel_01'];
  $tel_02 = $_GET['tel_02'];
  $tel_03 = $_GET['tel_03'];
  $email = $_GET['email'];

  $query = "INSERT INTO member(id, pwd, pwdchk, name, birth_yy, birth_mm, birth_dd, tel_01, tel_02, tel_03, email) values ('$id', '$pwd', '$pwdchk', '$name', '$birth_yy', '$birth_mm', '$birth_dd', '$tel_01', '$tel_02', '$tel_03', '$email')";
  // $result = $conn -> sqlsrv_query($query);
  $result = sqlsrv_query($conn, $query);


if (!$pwd) {
  echo "<script>alert('비밀번호를 입력하세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$pwdchk) {
  echo "<script>alert('비밀번호 확인을 다시 해주세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$name) {
  echo "<script>alert('이름을 입력하세요');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$birth_yy) {
  echo "<script>alert('생년월일을 입력하세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$birth_mm) {
  echo "<script>alert('생년월일을 입력하세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$birth_dd) {
  echo "<script>alert('생년월일을 입력하세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$tel_01) {
  echo "<script>alert('휴대전화를 입력하세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$tel_02) {
  echo "<script>alert('휴대전화를 입력하세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$tel_03) {
  echo "<script>alert('휴대전화를 입력하세요.');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

if (!$email) {
  echo "<script>alert('이메일을 입력하세요');</script>";
  echo "<script>location.replace('join.php');</script>";
  exit;
}

  //저장이 됐다면, (result = true) 가입 완료
  if($result){
?>
  <script>
    alert('가입되었습니다.');
    location.replace("login.php");
  </script>
<?php
  }
  else{
?>
  <script>
    alert('fail');
  </script>
<?php
  }
  sqlsrv_close($conn);
?>