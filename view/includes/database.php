<?php
  date_default_timezone_set('Asia/Seoul');

  // $serverName = "211.250.242.31,1455";
  $serverName = "106.10.107.2,1455";

  $connectionOptions = array(
    "database" => "waterk", // 데이터베이스명
    "uid" => "sa",   // 유저 아이디
    "pwd" => "sejoongDB9778@$",    // 유저 비번
    "CharacterSet" => "UTF-8"
  );

  // DB커넥션 연결
  $con = sqlsrv_connect($serverName, $connectionOptions);
  $params = array();
  $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
  session_start();

  if (isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    //$role = $_SESSION["role"];
    $name = $_SESSION["name"];
  }else{
    "";
  }

  if (isset($_SESSION["id"])) $id = $_SESSION["id"];
    else $id = "";

  if (isset($_SESSION["role"])) $role = $_SESSION["role"];
    else $role = "";

  if (isset($_SESSION["name"])) $name = $_SESSION["name"];
    else $name = "";
?>
