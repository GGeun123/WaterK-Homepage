<?php include("includes/database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/about.css" rel="stylesheet" />
    <title>e-waterkorea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="js/main.js" defer></script>
    <!-- <script src="js/scroll.js" defer></script> -->
</head>
<body>
  <!-- navigation -->
  <?php include("includes/nav.php");?>

  <!-- selection -->
  <div class="meta-header">
    <div class="meta-content">
      <h1>회사 소개</h1>
      <p><a href="index">Home </a> > 회사소개</p>
    </div>
    <div class="img-cover"></div>
  </div>

  <div class="wrap">
    <div class="container">
      <div class="list">
        <ul class="list-ul">
          <li><a href="#about_li">개요</a></li>
          <li><a href="#play_li">소개영상</a></li>
          <li><a href="#history_li">연혁 및 특허</a></li>
          <li><a href="#award_li">수상</a></li>
          <li><a href="#geo_li">오시는 길</a></li>
        </ul>
      </div>

      <div class="intro">
        <div class="about_li" id="about_li">
          <h2>안녕하십니까,<br>
          (주)워터코리아를 찾아주셔서 감사합니다.</h2>
          <p>
              “우리는 지구를 과거로부터 물려받은 것이 아니라, 자녀들로부터 빌려왔다”<br>
              ('We don't inherit the earth from our ancestors, we borrow it from our children.')라는 케냐 속담이 있습니다.<br>
              미래세대로부터 빌려온 자연환경을 잘 보존하는 것은 현재 우리 세대가 반드시 해야 할 숙명이라고 할 수 있습니다.<br><br>
              이에 저희 워터코리아는 ‘하면 된다’라는 사명을 품고, 미래 세대를 위한 수질환경 개선에 매진하고 있습니다.<br>
              최근 당사는 스마트 음이온시스템(Smart WAS)을 개발하여 심각하게 오염된 수질을 2차 오염 없이 저비용으로 회복시켜 국내외의 수질오염 문제를 해결하는데 기여하고 있습니다.<br>
              또한 IoT 4차산업혁명기술과 융합한 종합 수질관리 모니터링 시스템을 개발하여 더욱 효과적인 수질개선이 이루어지도록 노력하고 있습니다.<br><br>
              이제 워터코리아는 선도적인 환경관리 기술을 더욱 발전시켜 미래세대로부터 빌려온 자연환경을 더욱 깨끗하게 보존시키도록 오늘도 모든 임직원이 자신의 위치에서 최선을 다할 것을 약속드립니다.<br>
              또한, 지금의 성과에 안주하지 않고 도전하고 연구하는 진취적인 자세로 워터코리아를 더욱 좋은 기업으로 만들어 나가겠습니다.<br><br>
              여러분, 앞으로 저희 워터코리아에 애정 어린 관심을 계속해서 보내주시기를 진심으로 부탁드리고, 감사의 글을 올립니다.<br>
              앞날에 성공과 행복이 가득하시기를 기원합니다. 감사합니다.
          </p>
        </div>
      </div>
      <div class="about_info">
        <table class="table01">
          <colgroup>
            <col class="col_th">
          </colgroup>
          <tr>
            <th class="table-title">회사명</th>
            <td class="detail-info">(주)워터코리아</td>
          </tr>
          <tr>
            <th class="table-title">대표이사</th>
            <td class="detail-info">설 진 현(Seol Jin-Hyun)</td>
          </tr>
          <tr>
            <th class="table-title">설립연도</th>
            <td class="detail-info">2007년 12월</td>
          </tr>
          <tr>
            <th class="table-title">주소</th>
            <td class="detail-info">
              <span>본사</span><br>
              <ul class="detail-dd">
                <li>대구광역시 수성구 알파시티1로 169</li>
              </ul><br>
              <span>연구소&생산공장</span><br>
              <ul class="detail-dd">
                <li>대구광역시 달성군 구지면 달성2차 동3로 5</li>
                <li class="detail-box">Tel: 070-5079-9805</li>
                <li class="detail-box">Fax: 053-588-5778</li>
              </ul>
            </td>
          </tr>
        </table>
      </div>

      <div class="about_play" id="play_li">
        <div class="play01">
          <h2>•<span>• </span>소개 영상</h2>
          <iframe src="https://www.youtube.com/embed/AbMO4W_Tkgg" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
          <iframe src="https://www.youtube.com/embed/tIuOxmxvfUU" title="YouTube video player"
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
          </iframe>
        </div>
      </div>

      <div class="about_history" id="history_li">
        <div class="history">
          <h2>•<span>• </span>회사 연혁</h2>
          <hr>
          <div class="history-info">
            <img class="history-img" src="assects/img/history.png">
          </div>
      </div>

      <div class="about_patent">
        <div class="patent">
          <h2>•<span>• </span>특허 및 인증</h2>

          <div class="patent-info">
            <ul class="patent-ul">
              <li><img src="assects/img/award01.png"></li>
              <li><img src="assects/img/award02.png"></li>
              <li><img src="assects/img/award03.png"></li>
            </ul>
            <ul class="patent-ul">
              <li><img src="assects/img/award04.png"></li>
              <li><img src="assects/img/award05.png"></li>
              <li><img src="assects/img/award06.png"></li>
            </ul>
            <ul class="patent-ul">
              <li><img src="assects/img/award07.png"></li>
              <li><img src="assects/img/award08.png"></li>
              <li><img src="assects/img/award09.png"></li>
            </ul>
            <ul class="patent-ul">
              <li><img src="assects/img/award10.png"></li>
              <li><img src="assects/img/award11.png"></li>
              <li><img src="assects/img/award12.png"></li>
            </ul>
            <ul class="patent-ul">
              <li><img src="assects/img/award13.png"></li>
              <li><img src="assects/img/award14.png"></li>
              <li><img src="assects/img/award15.png"></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="about_award" id="award_li">
        <div class="award">
          <h2>•<span>• </span>수상내역</h2>
          <div class="award-info">
            <ul class="award-ul">
              <li><img src="assects/img/2019.jpg"></li>
              <li><img src="assects/img/2020.10.jpg"></li>
              <li><img src="assects/img/2020.11.jpg"></li>
              <li><img src="assects/img/2020.11 du.jpg"></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="about_geo" id="geo_li">
        <div class="geo">
          <h2>•<span>• </span>오시는 길</h2>
          <!-- kakao geo -->
          <div id="map"></div>
          <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=ac3584bfb823ff7a92ae93cb2ded95c7"></script>
          <script>
            var container = document.getElementById('map');
            var options = {
              center: new kakao.maps.LatLng(35.834476788498336, 128.68223758879097),
              level: 3
            };

            var map = new kakao.maps.Map(container, options);

            function currentLocation() {
            // HTML5의 geolocation으로 사용할 수 있는지 확인합니다
              if (navigator.geolocation) {
            // GeoLocation을 이용해서 접속 위치를 얻어옵니다
                navigator.geolocation.getCurrentPosition(function(position) {

                  var lat = position.coords.latitude, // 위도
                      lon = position.coords.longitude; // 경도

                  var locPosition = new kakao.maps.LatLng(lat, lon); // 마커가 표시될 위치를 geolocation으로 얻어온 좌표로 생성합니다
                  var message = '<div style="padding:5px;">현위치</div>'; // 인포윈도우에 표시될 내용입니다

                  // 마커와 인포윈도우를 표시합니다
                  displayMarker(locPosition, message);
                });
              } else { // HTML5의 GeoLocation을 사용할 수 없을때 마커 표시 위치와 인포윈도우 내용을 설정합니다

                var locPosition = new kakao.maps.LatLng(37.4812845080678, 126.952713197762),
                message = '현재 위치를 알 수 없어 기본 위치로 이동합니다.'

                currentLatLon['lat'] = 35.834476788498336
                currentLatLon['lon'] = 128.68223758879097

                displayMarker(locPosition, message);
              }
                return true;
            }                     
          </script>

          <div class="detail-table">
            <table class="table">
              <tr>
                <td>주소</td>
                <td>대구광역시 수성구 알파시티1로 169</td>
              </tr>
              <tr>
                <td>대표전화</td>
                <td>070-5079-9805</td>
              </tr>
              <tr>
                <td>팩스</td>
                <td>053-588-5778</td>
              </tr>
              <tr>
                <td>이메일</td>
                <td>wisdom@sejoongis.co.kr</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      
      <!-- scroll -->
      <?php include("includes/scroll.php");?>
    </div>
  </div>
  
  <!-- modal -->
  <?php include ("includes/modal.php") ?>
  
  <!-- footer -->
  <?php include ("includes/footer.php") ?>
</body>
</html>