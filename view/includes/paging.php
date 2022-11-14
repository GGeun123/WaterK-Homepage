<?php
$conn = mysqli_connect(
  'localhost', // 주소
  'root',
  '1234',
  'waterk'); // 데이터베이스 이름

  function page($start,$total,$scale,$page_scale,$first,$pre,$next,$last,$link){
    print"<a href='?start=0$link'>$first</a>";
  
    $page = floor ($start / ($scale * $page_scale));
    if ($total > $scale) {
      if($start+1 > $scale*$page_scale) {
        $pre_start = $page * $scale * $page_scale - $scale;
        print"<a href='?start=$pre_start$link'>$pre</a>";
      }
      else print"$pre";
    }
    else print"$pre";
  
   if($total > 0) print"| ";
  
   for ($vj=0 ; $vj<$page_scale ; $vj++) {
      $ln = ($page * $page_scale + $vj) * $scale;
      $page_num = $page * $page_scale+$vj + 1;
      if ($ln < $total) {
        if($ln != $start) print"<a href='?start=$ln$link'><b>$page_num</b></a> | ";
        else print"[<b>$page_num</b>] | ";
      }
    }
  
    if($total > (($page+1) * $scale * $page_scale)){
      $n_start = ($page+1) * $scale * $page_scale;
      print "<a href='?start=$n_start$link'>$next</a>";
    }
    else print $next;
  
    $end_start = floor($total/$scale)*$scale;
  
    print"<a href='?start=$end_start$link'>$last</a>";
  }


?>