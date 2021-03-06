<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="youngee">
    <meta name="description" content="youngee react portfolio">
    <meta name="keywords" content="portfolio, 웹퍼블리셔, 프론트엔드">
    <title>young portfolio</title>
    <link rel="stylesheet" href="asset/css/loading.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
</head>

<body>
    <div class="loader ">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" style="display: none;">
            <symbol id="wave">
              <path d="M420,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C514,6.5,518,4.7,528.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H420z"></path>
              <path d="M420,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C326,6.5,322,4.7,311.5,2.7C304.3,1.4,293.6-0.1,280,0c0,0,0,0,0,0v20H420z"></path>
              <path d="M140,20c21.5-0.4,38.8-2.5,51.1-4.5c13.4-2.2,26.5-5.2,27.3-5.4C234,6.5,238,4.7,248.5,2.7c7.1-1.3,17.9-2.8,31.5-2.7c0,0,0,0,0,0v20H140z"></path>
              <path d="M140,20c-21.5-0.4-38.8-2.5-51.1-4.5c-13.4-2.2-26.5-5.2-27.3-5.4C46,6.5,42,4.7,31.5,2.7C24.3,1.4,13.6-0.1,0,0c0,0,0,0,0,0l0,20H140z"></path>
            </symbol>
          </svg>
          <div class="box ">
            <div class="percent">
              <div class="percentNum" id="count"></div>
              <!-- <div class="percentB">%</div> -->
            </div>
            <div id="water" class="water">
              <svg viewBox="0 0 560 20" class="water_wave water_wave_back">
                <use xlink:href="#wave"></use>
              </svg>
              <svg viewBox="0 0 560 20" class="water_wave water_wave_front">
                <use xlink:href="#wave"></use>
              </svg>
            </div>
          </div>
    </div>
    

    <div class="main_loader main_loader--active">
        <ul>
            <li class="number"></li>
        </ul>
    </div>


    <div class="scorll">
        scorll
    </div>

    <button class="button_su login">
        <span class="su_button_circle">
        </span>
        <a href="#" class="button_su_inner">
            <span class="button_text_container">
                Login
            </span>
        </a>
    </button>

    <div class="cursor"></div>

    <!-- header -->
    <header id="header">
        <h1><a href="index2.html">Y</a></h1>
        <a href="#" class="m-menu">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <nav>
            <ul>
                <li><a href="page/project.html" class="page__click">Project</a></li>
                <li><a href="page/animation.html" class="page__click">Animation</a></li>
                <li><a href="page/javascript.html" class="page__click">Javascript</a></li>
                <li><a href="page/board.html" class="page__click">board</a></li>
                <li><a href="page/contact.html" class="page__click">contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- //header -->

    <main id="contents">

        <article id="content-aticle">
            <h2 class="ir_so">intro 페이지</h2>
            <section id="section01" class="intro-wrap">
                <h3 class="ir_so">intro wrap</h3>
                <div class="bg"></div>
                <div class="intro-content">
                    <p class="back-title">Hello</p>
                    <h4 class="strip">
                        Hi. Welcome to the<br>
                        front-end developer portfolio site. <br>
                        -Please look at this site as fun and cute<br>
                        ✌️
                    </h4>

                </div>

                <ul class="sns">
                    <li class="gitbook">
                        <a href="#">
                            <svg width="32" height="32" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M18.9 31.1061C19.5563 31.1061 20.1469 31.6311 20.1469 32.353C20.1469 33.0093 19.6219 33.5999 18.9 33.5999C18.2438 33.5999 17.6532 33.0749 17.6532 32.353C17.6532 31.6311 18.2438 31.1061 18.9 31.1061ZM38.1938 23.4936C37.5375 23.4936 36.9469 22.9686 36.9469 22.2468C36.9469 21.5905 37.4719 20.9999 38.1938 20.9999C38.85 20.9999 39.4407 21.5249 39.4407 22.2468C39.4407 22.903 38.85 23.4936 38.1938 23.4936ZM38.1938 18.4405C36.0938 18.4405 34.3875 20.1468 34.3875 22.2468C34.3875 22.6405 34.4532 23.0343 34.5844 23.428L22.05 30.1218C21.3282 29.0718 20.1469 28.4811 18.9 28.4811C17.4563 28.4811 16.1438 29.3343 15.4875 30.5811L4.20003 24.6749C3.01878 24.0186 2.10003 22.1155 2.23128 20.278C2.29691 19.3593 2.62503 18.6374 3.08441 18.3749C3.41253 18.178 3.74066 18.2436 4.20003 18.4405L4.26566 18.5061C7.28441 20.0811 17.0625 25.1999 17.4563 25.3968C18.1125 25.6593 18.4407 25.7905 19.5563 25.2655L39.7688 14.7655C40.0969 14.6343 40.425 14.3718 40.425 13.9124C40.425 13.3218 39.8344 13.0593 39.8344 13.0593C38.6532 12.5343 36.8813 11.6811 35.175 10.8936C31.5 9.1874 27.3 7.21865 25.4625 6.23427C23.8875 5.38115 22.575 6.10302 22.3782 6.23427L21.9188 6.43115C13.5844 10.6311 2.55941 16.078 1.90316 16.4718C0.787531 17.128 0.0656559 18.5061 3.0877e-05 20.2124C-0.131219 22.903 1.24691 25.7249 3.21566 26.7093L15.1594 32.878C15.4219 34.7155 17.0625 36.1593 18.9 36.1593C21 36.1593 22.6407 34.5186 22.7063 32.4186L35.8313 25.3311C36.4875 25.8561 37.3407 26.1186 38.1938 26.1186C40.2938 26.1186 42 24.4124 42 22.3124C42 20.1468 40.2938 18.4405 38.1938 18.4405Z"
                                        fill="#4285FD" />
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="42" height="42" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li class="github">
                        <a href="#">
                            <svg width="28" height="27" viewBox="0 0 31 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.3223 0C6.85671 0 0 6.79581 0 15.1862C0 21.906 4.386 27.5819 10.4766 29.594C11.2427 29.7269 11.53 29.2713 11.53 28.8727C11.53 28.512 11.5109 27.3161 11.5109 26.0443C7.66113 26.7466 6.66519 25.1141 6.35874 24.2599C6.18636 23.8233 5.4394 22.4755 4.78821 22.1148C4.25193 21.8301 3.48582 21.1277 4.76905 21.1088C5.97568 21.0898 6.83756 22.2098 7.12485 22.6653C8.50386 24.9623 10.7064 24.3168 11.5875 23.9182C11.7215 22.9311 12.1237 22.2667 12.5643 21.8871C9.15505 21.5074 5.59263 20.1976 5.59263 14.3889C5.59263 12.7374 6.18636 11.3706 7.16316 10.3076C7.00994 9.92795 6.47366 8.37137 7.31638 6.28328C7.31638 6.28328 8.59962 5.88464 11.53 7.83986C12.7558 7.49817 14.0582 7.32732 15.3606 7.32732C16.663 7.32732 17.9654 7.49817 19.1911 7.83986C22.1215 5.86566 23.4048 6.28328 23.4048 6.28328C24.2475 8.37137 23.7112 9.92795 23.558 10.3076C24.5348 11.3706 25.1285 12.7184 25.1285 14.3889C25.1285 20.2166 21.5469 21.5074 18.1377 21.8871C18.6932 22.3616 19.172 23.2728 19.172 24.6965C19.172 26.7276 19.1528 28.3602 19.1528 28.8727C19.1528 29.2713 19.4401 29.7459 20.2062 29.594C26.2585 27.5819 30.6445 21.8871 30.6445 15.1862C30.6445 6.79581 23.7878 0 15.3223 0Z"
                                    fill="#1B1F23" />
                            </svg>
                        </a>
                    </li>

                </ul>

            </section>
        </article>
        <!-- intro -->


        <!-- intro-myself -->
        <article class="content-aticle">
            <h3 class="ir_so">intronduce myself</h3>
            <section id="intro-myself">
                <h4 class="ir_so">introduce</h4>
                <div class="intro-myself">
                    <h5>Let me introduce <em>myself</em>.</h5>
                </div>
            </section>
        </article>
        <!-- //intro-myself -->

        <!-- about -->
        <article class="content-aticle">
            <h3 class="ir_so">메인 about 소개</h3>
            <section id="about" class="section-title" data-text="introduce">
                <h4 class="ir_so">about</h4>
                <div class="container">
                    <div class="about">
                        <div class="about-text">
                            <h5><em>Hello</em>, I am <span>trying</span> to be a
                                <span>creative</span> and <span>enjoyable</span>
                                front-end developer.
                            </h5>
                            <!-- <span></span> -->
                            <p>안녕하세요 저는<a href="#" data-bg="asset/image/sub/about02.jpg">창의적이고 </a>즐길 수 있는 프론트 엔드 개발자가
                                되기 위해 노력하고 있는 성태영 입니다.
                                어려운일도 즐겁게 즐기며 해결 할수있도록 <a href="#" data-bg="asset/image/sub/about03.jpg">긍정적인</a> 마인드로
                                공부 하고 있습니다. </p>
                            <p> 프론트엔드 개발자의 길을 걷기 위해 좀 더 창의적으로 생각하고
                                여러 <a href="#" data-bg="asset/image/sub/about01.jpg">경험</a>을 하기 위해 계속 노력하겠습니다.
                                아직 부족 한 포트폴리오 사이트 이지만 귀엽게 봐주시면 감사하겠습니다.☺️
                            </p>

                        </div>
                        <div class="about-img"></div>
                    </div>

                </div>
            </section>
        </article>
        <!-- //about -->

        <!-- main-comment -->
        <article class="full-aticle">
            <h3 class="ir_so">메인 comment</h3>
            <section id="main-comment" class="section-title" data-text="comment">
                <h4 class="ir_so">comment</h4>
                <div class="container">
                    <div class="main-comment">
                        <h5 class="title">comment</h5>
                        <p class="sub_title">Leave a comment about me~ 👍</p>
                        <div class="comment-form">
                            <form name="comment" method="post" action="">
                                <fieldset>
                                    <legend class="ir_so">댓글</legend>
                                    <div class="comment-wrap">
                                        <div>
                                            <label for="youName" class="ir_so">이름</label>
                                            <input class="inputText" type="text" name="youName" id="youName"
                                                placeholder="Name" autocomplete="off" required>
                                        </div>
                                        <div>
                                            <label for="youText" class="ir_so">코멘드를 적어주세요</label>
                                            <input class="inputText width" type="text" name="youText" id="youText"
                                                placeholder="Please write a comment" autocomplete="off" required>
                                        </div>

                                        <div>
                                            <button class="button_su">
                                                <span class="su_button_circle">
                                                </span>
                                                <a href="#" class="button_su_inner">
                                                    <span class="button_text_container">
                                                        Enter
                                                    </span>
                                                </a>
                                            </button>

                                        </div>

                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="comment-list-wrap swiper-container mySwiper">

                            <ul class="comment-list swiper-wrapper">
                                <li class="comment-box swiper-slide">
                                    <h6>이름</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Reiciendis hic accusamus
                                        sed asperiores, animi voluptatibus optio,
                                    </p>
                                    <span>2021.12.22</span>
                                </li>
                                <li class="comment-box swiper-slide">
                                    <h6>이름</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Reiciendis hic accusamus
                                        sed asperiores, animi voluptatibus optio,
                                    </p>
                                    <span>2021.12.22</span>
                                </li>
                                <li class="comment-box swiper-slide">
                                    <h6>이름</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Reiciendis hic accusamus
                                        sed asperiores, animi voluptatibus optio,
                                    </p>
                                    <span>2021.12.22</span>
                                </li>
                                <li class="comment-box swiper-slide">
                                    <h6>이름</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Reiciendis hic accusamus
                                        sed asperiores, animi voluptatibus optio,
                                    </p>
                                    <span>2021.12.22</span>
                                </li>
                                <li class="comment-box swiper-slide">
                                    <h6>이름</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Reiciendis hic accusamus
                                        sed asperiores, animi voluptatibus optio,
                                    </p>
                                    <span>2021.12.22</span>
                                </li>
                                <li class="comment-box swiper-slide">
                                    <h6>이름</h6>
                                    <p>Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Reiciendis hic accusamus
                                        sed asperiores, animi voluptatibus optio,
                                    </p>
                                    <span>2021.12.22</span>
                                </li>
                                <?php
                            include '../connect/connect.php';
                            
                            $sql = 'SELECT * FROM myComment';
                            $result = $connect -> query($sql);

                            while($date = mysqli_fetch_array($result)){
                            ?>
                                <div>
                                    <p><?=$date['youText']?></p>
                                    <div class="icon">
                                        <img src="../assets/img/stu01.png" alt="이정아">
                                        <span><?=$date['youName']?></span>
                                        <span><?=date('Y-m-d H:i',$date['regTime'])?></span>
                                    </div>
                                </div>
                           <?php
                            }
                           ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <!-- //main-comment -->


    </main>

    <!-- footer -->
    <footer>
        <section id="footer">
            <h3 class="ir_so">footer</h3>
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-contact">
                        <h4>What is this site?</h4>

                        <button class="button_su">
                            <span class="su_button_circle">
                            </span>
                            <a href="#" class="button_su_inner">
                                <span class="button_text_container">
                                    Contact me
                                </span>
                            </a>
                        </button>

                    </div>

                    <div class="conents_wrap">
                        <h4>Contents</h4>
                        <ul class="footer-contents">
                            <li><a href="#">Project</a></li>
                            <li><a href="#">Animation</a></li>
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">board</a></li>
                            <li><a href="#">Contant</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="footer-copy">
                <ul class="sns">
                    <li class="gitbook">
                        <a href="#">
                            <svg width="32" height="32" viewBox="0 0 42 42" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path
                                        d="M18.9 31.1061C19.5563 31.1061 20.1469 31.6311 20.1469 32.353C20.1469 33.0093 19.6219 33.5999 18.9 33.5999C18.2438 33.5999 17.6532 33.0749 17.6532 32.353C17.6532 31.6311 18.2438 31.1061 18.9 31.1061ZM38.1938 23.4936C37.5375 23.4936 36.9469 22.9686 36.9469 22.2468C36.9469 21.5905 37.4719 20.9999 38.1938 20.9999C38.85 20.9999 39.4407 21.5249 39.4407 22.2468C39.4407 22.903 38.85 23.4936 38.1938 23.4936ZM38.1938 18.4405C36.0938 18.4405 34.3875 20.1468 34.3875 22.2468C34.3875 22.6405 34.4532 23.0343 34.5844 23.428L22.05 30.1218C21.3282 29.0718 20.1469 28.4811 18.9 28.4811C17.4563 28.4811 16.1438 29.3343 15.4875 30.5811L4.20003 24.6749C3.01878 24.0186 2.10003 22.1155 2.23128 20.278C2.29691 19.3593 2.62503 18.6374 3.08441 18.3749C3.41253 18.178 3.74066 18.2436 4.20003 18.4405L4.26566 18.5061C7.28441 20.0811 17.0625 25.1999 17.4563 25.3968C18.1125 25.6593 18.4407 25.7905 19.5563 25.2655L39.7688 14.7655C40.0969 14.6343 40.425 14.3718 40.425 13.9124C40.425 13.3218 39.8344 13.0593 39.8344 13.0593C38.6532 12.5343 36.8813 11.6811 35.175 10.8936C31.5 9.1874 27.3 7.21865 25.4625 6.23427C23.8875 5.38115 22.575 6.10302 22.3782 6.23427L21.9188 6.43115C13.5844 10.6311 2.55941 16.078 1.90316 16.4718C0.787531 17.128 0.0656559 18.5061 3.0877e-05 20.2124C-0.131219 22.903 1.24691 25.7249 3.21566 26.7093L15.1594 32.878C15.4219 34.7155 17.0625 36.1593 18.9 36.1593C21 36.1593 22.6407 34.5186 22.7063 32.4186L35.8313 25.3311C36.4875 25.8561 37.3407 26.1186 38.1938 26.1186C40.2938 26.1186 42 24.4124 42 22.3124C42 20.1468 40.2938 18.4405 38.1938 18.4405Z"
                                        fill="#4285FD"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="42" height="42" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </li>
                    <li class="github">
                        <a href="#">
                            <svg width="28" height="27" viewBox="0 0 31 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.3223 0C6.85671 0 0 6.79581 0 15.1862C0 21.906 4.386 27.5819 10.4766 29.594C11.2427 29.7269 11.53 29.2713 11.53 28.8727C11.53 28.512 11.5109 27.3161 11.5109 26.0443C7.66113 26.7466 6.66519 25.1141 6.35874 24.2599C6.18636 23.8233 5.4394 22.4755 4.78821 22.1148C4.25193 21.8301 3.48582 21.1277 4.76905 21.1088C5.97568 21.0898 6.83756 22.2098 7.12485 22.6653C8.50386 24.9623 10.7064 24.3168 11.5875 23.9182C11.7215 22.9311 12.1237 22.2667 12.5643 21.8871C9.15505 21.5074 5.59263 20.1976 5.59263 14.3889C5.59263 12.7374 6.18636 11.3706 7.16316 10.3076C7.00994 9.92795 6.47366 8.37137 7.31638 6.28328C7.31638 6.28328 8.59962 5.88464 11.53 7.83986C12.7558 7.49817 14.0582 7.32732 15.3606 7.32732C16.663 7.32732 17.9654 7.49817 19.1911 7.83986C22.1215 5.86566 23.4048 6.28328 23.4048 6.28328C24.2475 8.37137 23.7112 9.92795 23.558 10.3076C24.5348 11.3706 25.1285 12.7184 25.1285 14.3889C25.1285 20.2166 21.5469 21.5074 18.1377 21.8871C18.6932 22.3616 19.172 23.2728 19.172 24.6965C19.172 26.7276 19.1528 28.3602 19.1528 28.8727C19.1528 29.2713 19.4401 29.7459 20.2062 29.594C26.2585 27.5819 30.6445 21.8871 30.6445 15.1862C30.6445 6.79581 23.7878 0 15.3223 0Z"
                                    fill="white"></path>
                            </svg>

                        </a>
                    </li>
                    <li>
                        <a href="#">publisher portpolio</a>
                    </li>
                </ul>
            </div>
        </section>
    </footer>
    <!-- footer -->

    


 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>

    <script src="asset/js/main.js"></script>
    <!-- <script src="asset/js/sub.js"></script> -->
    <script src="asset/js/loading.js"></script>
    <script src="asset/js/common.js"></script>

    <script>
    
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
        
        $(function() {
            var cnt0 = 0;
            counterFn();
            function counterFn() {
                id0 = setInterval(count0Fn, 50);
                function count0Fn() {
                    cnt0++;
                    if (cnt0 > 100) {
                    clearInterval(id0);
                    } else {
                    $(".number").text(cnt0);
                    }
                }
            }
         });

    </script>
</body>

</html>