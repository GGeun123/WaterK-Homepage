<?php
$serverName = "106.10.107.2,1455";

$connectionOptions = array(
    "database" => "waterk", // 데이터베이스명
    "uid" => "sa",   // 유저 아이디
    "pwd" => "sejoongDB9778@$",    // 유저 비번
    "CharacterSet" => "UTF-8"
);
$conn = sqlsrv_connect($serverName, $connectionOptions);
$sql = "SELECT * FROM dbo.board";
$result = sqlsrv_query($conn, $sql);

?>