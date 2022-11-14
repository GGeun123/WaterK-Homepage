  <div class="list">
    <ul class="list-ul">
      <li><a href="notice.php">공지사항</a></li>
      <li><a href="article.php">보도자료</a></li>
      <li><a href="award.php">수상 및 활동</a></li>
      <li><a href="board.php">문의하기</a></li>
    </ul>
  </div>


  <style>
    /* list-style */
.list{
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: 'STIX Two Math';
}
.list .list-ul{
  list-style: none;
  display: flex;
  margin: auto;
}
.list-ul li{
  padding: 30px 80px;
  font-size: 2.0rem;;
}
.list a{
  color: #8c8c8c;
  text-decoration: none;
}
@media screen and (max-width: 800px){
  .list-ul li{
    padding: 30px 50px;
    font-size: 10px;
  }
}
.list-ul li:hover{color: #3b5386;}
.list-ul li a{position: relative; text-decoration: none;}
.list-ul li a:hover{color:#8c8c8c;}
.list-ul li a::after{
   content: '';
   width: 0%;
   left: 50%;
   height: 1px;
   display: block;
   position: absolute;
   margin-top: 3px;
}
.list-ul li:hover > a::after{
   content: '';
   width: 100%;
   left:0px;
   height: 1px;
   display: block;
   margin-top: 3px;
   border-bottom: 2px solid #5e8df3;
}
  </style>