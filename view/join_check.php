<?php
  $serverName = "106.10.107.2,1455";

  $connectionOptions = array(
      "database" => "waterk", // 데이터베이스명
      "uid" => "sa",   // 유저 아이디
      "pwd" => "sejoongDB9778@$",    // 유저 비번
      "CharacterSet" => "UTF-8"
  );
    $conn = sqlsrv_connect($serverName, $connectionOptions);

  $id= $_GET["userid"];  //GET으로 넘긴 userid
  $sql= "SELECT * FROM member where id='$id'";
  $result = sqlsrv_fetch_array(sqlsrv_query($conn, $sql));

  if(!$result){
      echo "<span style='color:blue;'>$id</span> 는 사용 가능한 아이디입니다.";
?>
  
  <p><input type=button value="이 ID 사용" onclick="opener.parent.decide(); window.close();"></p>
        
<?php
  } 
  else {
    echo "<span style='color:red;'>$id</span> 는 중복된 아이디입니다.";
?>

  <p><input type=button value="다른 ID 사용" onclick="opener.parent.change(); window.close()"></p>

<?php
    }
?>
