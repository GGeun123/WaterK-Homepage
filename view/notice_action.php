<?php
    include("includes/database.php");

    $title = $_POST['title'];               //Title
    $name = $_POST['name'];                   //Writer
    $content = $_POST['content'];           //Content
    $email = $_POST['email'];
    $date = date('Y-m-d H:i:s');
    $URL = './notice.php';                   //return URL


    // 파일 업로드
    $tmpfile =  $_FILES['file']['tmp_name'];
    $o_name = $_FILES['file']['name'];
    $filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
    $folder = "../../upload/".$filename;
    move_uploaded_file($tmpfile,$folder);


    $query = "INSERT INTO notice (title, content, email, name, date, file_1) 
            values('$title', '$content', '$email', '$name', '$date' ,'$o_name')";


    $result = sqlsrv_query($con, $query);

    if ($result) {
        ?> <script>
                alert("<?php echo "게시글이 등록되었습니다." ?>");
                location.replace("<?php echo $URL ?>");
            </script>
        <?php
    } else {
        echo "게시글 등록에 실패하였습니다.";
    }
    
    sqlsrv_close($con);
?>