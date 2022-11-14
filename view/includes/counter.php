<?php

$today = date('Y-m-d');

$query ="SELECT count(*) FROM counter";
$ret = sqlsrv_query($con, $query);
$row = sqlsrv_num_rows($ret);
 

//입력된 레코드가 없을 경우 한건을 입력
if($row == 0) {
  sqlsrv_query("INSERT INTO counter SET `date`='$today', daily_count=0, total_count=0");
}
 

//현재 날짜가 DB에 기록된 날짜와 다를 경우 날짜 변경
if($today != $row['date']) {
  sqlsrv_query("UPDATE counter SET `date`='$today', daily_count=1, total_count=total_count+1");
}else {
  //현재 날짜와 DB에 기록된 날짜가 같은 경우
  //쿠키정보가 없거나 만료된 경우 카운터 증가 후 쿠키 생성
  if($_COOKIE['counter_add'] != '1') {
    sqlsrv_query("UPDATE counter SET daily_count=daily_count+1, total_count=total_count+1");
    setcookie("counter_add", "1", time()+60*60*24, "/");
  }
}
?>