<!-- Navigation-->
<nav class="navbar">
        <link href="assects/css/nav.css" rel="stylesheet" />
        <div class="navbar_logo">
            <a href="index.php"><img src="assects/img/logo-white.png"></a>
        </div>
    
        <ul class="navbar_menu">
            <li><a href="about.php">회사소개</a></li>
            <li><a href="product_info.php">주요사업</a></li>
            <li><a href="SWAS.php">제품소개</a></li>
            <li><a href="https://alsk123450.github.io/company/">세중아이에스</a></li>
            <li><a href="notice.php">문의사항</a></li>
            <!-- 로그인 -->
            <?php
                if(!$id){
            ?>
            <li>
                <a href="login.php">로그인</a>
            </li>
            <?php
                }else{
                    $logged = $id;
            ?>
            <li>
                <a><?=$logged ?>님</a>
            </li>
            <li>
                <a href="logout.php">로그아웃</a>
            </li>
            <?php
                }
            ?>
        </ul>
    
        <a href="#" class="navbar_toggleBtn">
            <img class="hamburger" src="assects/img/list.svg">
        </a>
</nav>