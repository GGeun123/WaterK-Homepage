<?php include("includes/database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/join.css" rel="stylesheet" />
    <title>e-waterkorea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="js/main.js" defer></script>
    
    <script>
        function checkid(){
          var userid = document.getElementById("id").value;
          if(userid)  //userid로 받음
          {
            url = "join_check.php?userid="+userid;
            window.open(url,"chkid","width=400,height=200");
          } else {
            alert("아이디를 입력하세요.");
          }
        }

        function decide(){
          document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
          document.getElementById("decide_id").value = document.getElementById("id").value
          document.getElementById("id").disabled = true
          document.getElementById("join_button").disabled = false
          document.getElementById("check_button").value = "다른 ID로 변경"
          document.getElementById("check_button").setAttribute("onclick", "change()")
        }

        function change(){
          document.getElementById("decide").innerHTML = "<span style='color:red;'>ID 중복 여부를 확인해주세요.</span>"
          document.getElementById("id").disabled = false
          document.getElementById("id").value = ""
          document.getElementById("join_button").disabled = true
          document.getElementById("check_button").value = "ID 중복 검사"
          document.getElementById("check_button").setAttribute("onclick", "checkid()")
        }

        $id = $_POST['decide_id'];
    </script>
</head>
<body>
  <!-- navigation -->
  <?php include("includes/nav.php");?>

  <!-- section -->
  <div class="wrap">
    <div class="container">
      <h2>회원가입</h2>
      <div class="join">
        <div class="join-info">
          <form class="join-form" action="join_action.php?" method="get" id="join-form">
            <ul>
              <li class="list-title_id">ID</li>
              <li class="list-info_id"><input class="form-control" type="text" name="id" id="id" placeholder="아이디를 입력하세요." require></li>
              <li class="list-btn_id"><input type="button" id="check_button" value="중복확인" onclick="checkid();"></li>
              <input type="hidden" name="id" id="decide_id">
              <p><span id="decide" style='color:red;'>ID 중복 여부를 확인해주세요.</span>
            </ul>
            <ul>
              <li class="list-title">PWD</li>
              <li class="list-info"><input class="form-control" type="password" name="pwd" id="pwd" placeholder="비밀번호를 입력하세요."></li>
            </ul>
            <ul>
              <li class="list-title"></li>
              <li class="list-info"><input class="form-control" type="password" name="pwdchk" id="pwdchk" placeholder="비밀번호 재확인 하세요."></li>
            </ul>
            <ul>
              <li class="list-title">이름</li>
              <li class="list-info"><input class="form-control" type="text" name="name"></li>
            </ul>
            <ul>
              <li class="list-title_birth">생년월일</li>
              <li class="list-info_birth"><input class="form-control" type="text" name="birth_yy" placeholder="년 (4자)"></li>
              <li class="list-info_birth"><input class="form-control" type="text" name="birth_mm" placeholder="월 (month)"></li>
              <li class="list-info_birth"><input class="form-control" type="text" name="birth_dd" placeholder="일 (date)"></li>
            </ul>
            <ul>
              <li class="list-title">휴대전화</li>
              <li class="list-info-tel"><input class="form-control" type="text" name="tel_01" placeholder="010"></li> -
              <li class="list-info-tel"><input class="form-control" type="text" name="tel_02"></li> -
              <li class="list-info-tel"><input class="form-control" type="text" name="tel_03"></li>
            </ul>
            <ul>
              <li class="list-title">EMAIL</li>
              <li class="list-info"><input class="form-control" type="text" name="email" placeholder="본인확인용 이메일 (필수)"></li>
            </ul>
            <div class="button">
              <button type="submit" value="submit" id="join_button">가 입</button>
            </div>
            </form>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include ("includes/footer.php") ?>
</body>
</html>