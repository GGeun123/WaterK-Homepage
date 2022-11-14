<?php
    //include 'includes/session.php';
    $serverName = "106.10.107.2,1455";

    $connectionOptions = array(
        "database" => "waterk", // 데이터베이스명
        "uid" => "sa",   // 유저 아이디
        "pwd" => "sejoongDB9778@$",    // 유저 비번
        "CharacterSet" => "UTF-8"
    );
      $conn = sqlsrv_connect($serverName, $connectionOptions);

    $number = $_GET['number'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    $query = "update board set title='$title' ,content='$content', tel = '$tel', email = '$email' where number='$number'"; 
    $result = sqlsrv_query($conn, $query);
    
    
    // if($result === false){
    //   echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
    //   error_log(mysqli_error($conn));
    // } else {
    //   echo '성공했습니다. <a href="notice.php">돌아가기</a>';
    // }

    echo "
    <script>
     location.href = 'board.php?page=$page';
    </script>
 ";
?>