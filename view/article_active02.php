<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="assects/css/article_read.css" rel="stylesheet" />
    <title>e-waterkorea</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="js/main.js" defer></script>
  </head>
<body>
  <!-- navigation -->
  <?php include("includes/session.php"); ?>
  <?php include("includes/nav.php");?>

  <!-- selection -->
  <div class="meta-header">
    <div class="meta-content">
      <h1>문의 사항</h1>
    </div>
  </div>
  <?php include("includes/select.php");?>

  <!-- section -->
  <div class="wrap">
    <div class="container">
      <div class="read_box">
          <div class="form-toal">
            <p><img src="assects/img/house.svg"> 문의사항 > 보도 자료</p>
            <h2>보도 자료</h2>
            <hr>
          </div>
        <div class="table">
          <div class="table-title">
            <h4>(주)워터코리아, 대구대 초기창업패키지 지원사업 성과공유 행사 참여</h4>
            <hr>
          </div>
          <div class="table-info">
            <ul>
              <li>작성자: 관리자</li>
              <li>작성일: 2021.02.25</li>
              <hr>
            </ul>
          </div>
          <div class="table-img">
            <h3>27개 초기창업기업과 함께 1년간 이룬 사업성과 공유 및 네트워킹<br>
              우수창업기업의 사업고도화 전략 및 성공모델 사례 발표
            </h3>
            <img src="assects/img/article/1.png">
            <p>대구대 창업지원단이 진행한 '2020년 초기창업패키지 지원사업 성과교유 및 네트워킹데이'에서 
              (주)워터코리아 관계자다 발표를 하고 있다.
            </p>
          </div>
          <div class="table-content">
            <p>
            대구대(총장 김상호) 창업지원단이 지난 24일 온라인과 오프라인을 병행하여 2020년 초기창업패키지 지원사업 성과공유 및 네트워킹데이 행사를 개최했다.

            이번 행사는 지난해 활동했던 27개 기업과 함께 1년간 이룬 사업성과를 공유하면서, 현재의 창업지원 환경을 돌아보고 앞으로의 창업 활성화 방향을 모색하는 시간을 갖기 위해 마련됐다.

            초기창업패키지 지원사업은 유망 창업아이템과 고급 기술력을 보유한 3년 이내의 초기창업기업을 대상으로 사업 안정화와 성장을 지원하는 사업으로 평균 7천만원의 사업화 자금과 특화 프로그램을 제공한다.

            이날 행사 1부에서는 '창업기업의 Step-Up 교육'을 했다. 교육 내용으로는 변경되는 세법 관련 핵심 포인트, 2021년 R&D지원사업 선정 노하우 등이 포함됐다.

            2부에서는 '참여기업 사례 및 사업 성과공유' 시간을 가졌다. 성공모델 확산을 위해 2019년 '최우수' 기업인 <주>소폼은 선배기업 사례를 공유했고, 2020년 활동했던 <주>워터코리아는 사업고도화 전략을, 농업회사법인보경팜테크<주>는 6차 산업 중점 성장 사례를 발표했다.

            마지막으로 3부인 '연대·협력을 위한 네트워킹'에서는 참여기업 간의 시너지 창출 및 창업 활성화를 위한 장이 마련됐다. 창업지원단은 창업기업과 함께 지속적인 사업연계와 사후관리를 통해 사업 안정화와 성장 지원을 이어나갈 것을 약속했다.

            이재현 창업지원단장은 "올해 대구대 창업지원단은 경북에서 유일하게 중기부 '창업지원사업 3관왕' 달성 쾌거를 거두며, 창업지원기관으로 두각을 나타내고 있다"며 "앞으로도 명실상부한 선도적 창업지원기관으로 거듭날 수 있도록 유망기업을 발굴·육성하고 초기창업기업의 투자기능을 강화시키는 노력을 하겠다"고 말했다.

            한편, 창업지원단은 오는 3월 공고 예정인 2021년 초기창업패키지 지원사업의 참여기업을 모집하기 위해 (온라인)사업설명회 개최, 원스톱 창업상담창구 운영 등 다방면의 활동을 계획하고 있다.

            박종문기자 kpjm@yeongnam.com
            </p>
          </div>
          <hr>
        </div>
      </div>
      <div class="button">
        <button onclick="window.location.href='article.php'"><a>목록으로</a></button>
      </div>
    </div>
  </div>
  <!-- footer -->
  <?php include("includes/footer.php"); ?>

  <!-- scroll -->
  <?php include("includes/scroll.php");?>
</body>
</html>