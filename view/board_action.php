<?php
    include("includes/database.php");

    $id = $_POST['id']; 
    $title = $_POST['title'];               //Title                  //Writer
    $content = $_POST['content'];           //Content
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $date = date('Y-m-d H:i:s');
    $URL = './board.php';                   //return URL


    $query = "INSERT INTO board (id, title, content, email, tel, date) 
            values('$id','$title', '$content', '$email', '$tel', '$date')";
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