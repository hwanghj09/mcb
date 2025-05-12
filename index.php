<?php
// Set page title
$page_title = "문화창작부";  // "Mystery Space" in Korean

// Header section
function renderHeader() {
    global $page_title;
    $current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
     if ($current_page === 'members') {
        $background_image = "/images/멤버/멤버 배경.jpg";
    } 
    else if ($current_page === 'museum') {
        $background_image = "/images/박물관/박물관 배경.jpg";
    }
    else if ($current_page === 'notice') {
        $background_image = "/images/공지/공지 배경.jpg";
    }else {
        $background_image = "/images/홈/홈 배경.jpg";
    }
    ?>
    <!DOCTYPE html>
    <html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $page_title; ?></title>
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: 'Arial', sans-serif;
                background-image: url('<?php echo $background_image; ?>');
            }
            
            .header {
                text-align: center;
                margin-bottom: 30px;
            }
            
            .logo {
                max-width: 300px;
                margin: 0 auto;
            }
            
            .character-container {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .character {
                text-align: center;
            }
            
            .character img {
                max-width: 100%;
                height: auto;
            }
            
            .nav {
                display: flex;
                justify-content: center;
                gap: 30px;
                margin: 20px 0;
            }
            
            .nav a {
                -webkit-text-stroke-width: 1px;
-webkit-text-stroke-color:rgb(111, 111, 111);
                text-decoration: none;
                font-size: 18px;
                padding: 10px;
            }
            
            .nav a:hover {
                -webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #fff;
            }
            
            .content-section {
                padding: 20px;
                margin-bottom: 30px;
            }
            
            .character-profiles {
                display: grid;
                padding: 20px;
                margin-bottom: 30px;
                margin-top: 30px;
                grid-template-columns: repeat(4, 1fr); /* 한 줄에 4개 */
                gap: 20px;
            }

            
            .profile {
                text-align: center;
            }
            
            .profile img {
                width: 75%;
                border-radius: 50%;
                margin-bottom: 10px;
            }
            
            .social-links {
                display: flex;
                justify-content: center;
                gap: 10px;
                margin-top: 5px;
            }
            
            .social-links a {
                display: inline-block;
                width: 24px;
                height: 24px;
            }
            
            .question-mark-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 20px;
            }
            
            .question-box {
                aspect-ratio: 16/4;
                background-color: rgba(20, 20, 40, 0);
                border: 2px solid white;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 48px;
                cursor: pointer;
            }
            
            .footer {
                text-align: center;
                padding: 20px;
                margin-top: 40px;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            
    <?php
}

// Footer section
function renderFooter() {
    ?>
    <div class="nav">
                <a href="?page=home">홈</a>
                <a href="?page=members">멤버</a>
                <a href="?page=museum">박물관</a>
                <a href="?page=notice">공지</a>
        </div>
            
        </div>
    </body>
    </html>
    <?php
}

// Main content based on page
function renderMainContent($page = 'home') {
    switch($page) {
        case 'members':
            renderMembersPage();
            break;
        case 'museum':
            renderMuseumPage();
            break;
        case 'notice':
            rendernoticePage();
            break;
        default:
            renderHomePage();
    }
}

// Home page content
function renderHomePage() {
    ?>
    <div class="header">
                <img src="images/홈/소개글.png" alt="title" style="width: 20%; height: 20%"><br>
<img src="images/홈/제목.png" alt="title" style="width: 20%; height: 20%">
            </div>
            </div>
        <div class="character-container">
            <img src="images/홈/캐릭터.png" alt="Main Characters" style="width: 50%; height: 50%">
        </div>
    <?php
}

// Members page
function renderMembersPage() {
    ?>
    <div id="members" class="content-section">
        <div class="character-profiles">
            <div class="profile">
                <img src="images/멤버/문화창작부프로필.png" alt="문화창작부">
                <h3>문화창작부</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/culture_creating_club?igsh=MWIyYTRnNjRuZGRxZQ%3D%3D&utm_source=qr"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                    <a href="https://youtube.com/channel/UC1-qO1S6v3jpyIF_MdmsIEQ?si=9mAaM5jNI4h2PS8w"><img src="images/멤버/유튜브 로고.png" alt="YouTube"></a>
                    <a href="https://x.com/imsi657719?s=21"><img src="images/멤버/X 로고.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="profile">
                <img src="images/멤버/상시프로필.png" alt="부장 / 상시">
                <h3>부장 / 상시</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/sangsi3679/?utm_source=ig_web_button_share_sheet"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                    <a href="https://www.youtube.com/@asr-t3z6m"><img src="images/멤버/유튜브 로고.png" alt="YouTube"></a>
                    <a href="https://x.com/aga04743744264?s=21&fbclid=PAZXh0bgNhZW0CMTEAAaeuIqNO6lunb3A2khlAmsqnFeU7B4x9HExlzzK_0WD8624BzctPN4NE09oxzQ_aem_722XsFPQHpRA8-VkhGvuSA"><img src="images/멤버/X 로고.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="profile">
                <img src="images/멤버/양고기프로필.png" alt="개발자 / 잔고기">
                <h3>개발자 / 양고기</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/sheep._.meat/?utm_source=ig_web_button_share_sheet"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                </div>
            </div>
            <div class="profile">
                <img src="images/멤버/소고기프로필.png" alt="기획자 / 소고기">
                <h3>기획자 / 소고기</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/sogogi09?utm_source=ig_web_button_share_sheet"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                    <a href="#"><img src="images/멤버/X 로고.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="profile">
                <img src="images/멤버/안개꽃프로필.png" alt="작가 / 전계곡">
                <h3>작가 / 안개꽃</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/angae_flower_/?utm_source=ig_web_button_share_sheet"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                    <a href="#"><img src="images/멤버/X 로고.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="profile">
                <img src="images/멤버/앵프로필.png" alt="디자이너 / 램">
                <h3>디자이너 / 앵</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/aeng_uoi4/?utm_source=ig_web_button_share_sheet"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                    <a href="#"><img src="images/멤버/유튜브 로고.png" alt="YouTube"></a>
                </div>
            </div>
            <div class="profile">
                <img src="images/멤버/토욥일프로필.png" alt="디자이너 / 토끼일">
                <h3>디자이너 / 토욥일</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/toyob00/?utm_source=ig_web_button_share_sheet"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                    <a href="#"><img src="images/멤버/X 로고.png" alt="Twitter"></a>
                </div>
            </div>
            <div class="profile">
                <img src="images/멤버/폐인귄프로필.png" alt="매니저 / 레인건">
                <h3>매니저 / 폐인귄</h3>
                <div class="social-links">
                    <a href="https://www.instagram.com/pyeingwin/?utm_source=ig_web_button_share_sheet"><img src="images/멤버/인스타 로고.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function renderMuseumPage() {
    ?>
    <div id="museum" class="content-section">
        <img src='images/박물관/문화창작부 박물관 글씨.png'>
        <div class="question-mark-container">
            <div class="question-box">?</div>
        </div>
    </div>
    <?php
}

function rendernoticePage() {
    ?>
    <div id="notice" class="content-section">
        <h2>공지</h2>
    </div>
    <?php
}

$current_page = isset($_GET['page']) ? $_GET['page'] : 'home';
renderHeader();
renderMainContent($current_page);
renderFooter();
?>