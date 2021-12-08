<section id='projekty'
    class="services gradient">
    <svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 250">
        <path fill="#fff"
            fill-opacity="1"
            d="M0,96L40,112C80,128,160,160,240,160C320,160,400,128,480,122.7C560,117,640,139,720,133.3C800,128,880,96,960,96C1040,96,1120,128,1200,138.7C1280,149,1360,139,1400,133.3L1440,128L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
        </path>
    </svg>
    <div class="container">
        <div class="row align-items-center justify-content-center pb-5">
            <div
                class="d-flex justify-content-center align-items-center mb-3 mt-3">
                <hr class="w-25"
                    style="height:1px; color:#fff; opacity:1">
                <h1 class="text-center text-uppercase px-1 px-md-5">
                    projekty</h1>
                <hr class="w-25"
                    style="height:1px; color:#fff; opacity:1">

            </div>
            <div class="row my-5">
                <div class="d-flex flex-wrap justify-content-center">
                    <button id='js'
                        class="card__button col-10 col-sm-5 col-lg-3 button--services"
                        type="button"><i class="fab fa-js"></i>
                        HTML, css, javascript </button>
                    <button id='bootstrap'
                        class="card__button col-10 col-sm-5 col-lg-3 button--services"
                        type="button"><i class="bi bi-bootstrap-fill"></i>
                        bootstrap </button>
                    <button id="wordpress"
                        class="card__button col-10 col-sm-5 col-lg-3 button--services "
                        type="button"><i class="fab fa-wordpress"></i>
                        wordpress </button>
                    <button id="react"
                        class="card__button col-10 col-sm-5 col-lg-3 button--services"
                        type="button"><i class="fab fa-react"></i>
                        react </button>
                    <button id="allprojects"
                        class="card__button col-10 col-sm-5 col-lg-3 button--services"
                        type="button"><i class="fas fa-project-diagram"></i>
                        wszystkie projekty </button>
                    <button id="delete"
                        class="card__button col-10 col-sm-5 col-lg-3 button--services"
                        type="button"><i class="fas fa-trash-alt"></i>
                        ukryj projekty </button>
                </div>
            </div>
        </div>
        <div class="row hide--project wordpress">
            <div class="col-md-6 card__cont order-2 order-sm-2 order-md-2">
                <h3 class="text-center text-uppercase">Producent
                    łodzi
                </h3>
                <hr>
                <p>Strona została zakodowana przy użyciu:</p>
                <ul>
                    <li>WordPress</li>
                    <li>Gutenberg</li>
                    <li>Kadence Template & Blocks</li>
                    <li>Duplicator</li>
                    <li>FooGallery</li>
                    <li>WP Map Block</li>
                </ul>
                <div class="row px-4 px-sm-0">
                    <button class="card__button col-sm-5"
                        type="button"
                        onclick="window.open('https://jacekmaciejak.pl/syriusz/','_blank')">
                        Zobacz projekt
                    </button>
                    <button class="card__button col-sm-5"
                        type="button"
                        onclick="window.open('https://github.com/jacekmaciejak/producent-lodzi','_blank')">
                        GitHub
                    </button>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-center
                     order-1 order-sm-1 order-md-1">
                <?php include('components/gallery_boats.inc.php')?>
            </div>
        </div>
        <div class="row hide--project wordpress">
            <div class="col-md-6 card__cont order-2 order-sm-2 order-md-1">
                <h3 class="text-center text-uppercase">Wizytówka
                </h3>
                <hr>
                <p>Strona została zakodowana przy użyciu:</p>
                <ul>
                    <li>WordPress</li>
                    <li>Elementor</li>
                    <li>PHP</li>
                    <li>Strona napisana od podstaw</li>
                    <li>Duplicator</li>
                </ul>
                <div class="row px-4 px-sm-0">
                    <button class="card__button col-sm-5"
                        type="button"
                        onclick="window.open('https://jacekmaciejak.pl/clocks/','_blank')">
                        Zobacz projekt
                    </button>
                    <button class="card__button col-sm-5"
                        type="button"
                        onclick="window.open('https://github.com/jacekmaciejak/clocks','_blank')">

                        GitHub
                    </button>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center
                     order-1 order-sm-1 order-md-2">
                <?php include('components/gallery_clocks.inc.php')?>
            </div>
        </div>
        <div class="row react hide--project">
            <div class="col-md-6 d-flex align-items-center overflow-hidden
                    px-0 ">
                <img src="img/card_6.jpg"
                    class="img-fluid align-items-center img--hover h-100"
                    alt="programming"></div>
            <div class="col-md-6 card__cont">
                <h3 class="text-center text-uppercase">Egzotyczne
                    wakacje
                </h3>
                <hr>
                <p>Strona została zakodowana przy użyciu:</p>
                <ul>
                    <li>React</li>
                    <li>JavaScript</li>
                    <li>HTML5</li>
                    <li>CSS3</li>
                </ul>
                <button class="card__button"
                    type="button"
                    onclick="window.open('https://jacekmaciejak.github.io/dream-holidays/','_blank')">
                    Zobacz projekt
                </button>
            </div>
        </div>
        <div class="row react hide--project">
            <div class="col-md-6 card__cont order-2 order-sm-2 order-md-1 ">
                <h3 class="text-center text-uppercase">Ogrody</h3>
                <hr>
                <p>Strona została zakodowana przy użyciu:</p>
                <ul>
                    <li>HTML5</li>
                    <li>SCSS</li>
                    <li>Grid Layout</li>
                    <li>Responsive web design</li>
                    <li>JavaScript</li>
                    <li>React</li>
                </ul>
                <button class="card__button"
                    type="button"
                    onclick="window.open('https://jacekmaciejak.github.io/interior-finishes/','_blank')">
                    Zobacz projekt
                </button>
            </div>
            <div class="col-md-6 d-flex align-items-center overflow-hidden
                    px-0 order-1 order-sm-1 order-md-2">
                <img src="img/card_1.jpg"
                    class="img-fluid align-items-center img--hover h-100"
                    alt="programming"></div>
        </div>
        <div class="row hide--project js">
            <div class="col-md-6 d-flex align-items-center overflow-hidden
                    px-0 ">
                <img src="img/card_2.jpg"
                    class="img-fluid w-100 h-100 align-items-center img--hover"
                    alt="programming"></div>
            <div class="col-md-6 card__cont">
                <h3 class="text-center text-uppercase">Wizytówka</h3>
                <hr>
                <p>Strona została zakodowana przy użyciu:</p>
                <ul>
                    <li>HTML5</li>
                    <li>SCSS</li>
                    <li>Grid Layout</li>
                    <li>Responsive web design</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                </ul>
                <button class="card__button"
                    type="button"
                    onclick="window.open('https://jacekmaciejak.github.io/Business-Site/','_blank')">
                    Zobacz projekt
                </button>
            </div>
        </div>
        <div class="row hide--project js">
            <div class="col-md-6 card__cont order-2 order-sm-2 order-md-1">
                <h3 class="text-center text-uppercase">Restauracja</h3>
                <hr>
                <p>Strona została zakodowana przy użyciu:</p>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Grid Layout</li>
                    <li>Responsive web design</li>
                    <li>JavaScript</li>
                </ul>
                <button class="card__button"
                    type="button"
                    onclick="window.open('https://jacekmaciejak.github.io/Restaurant/','_blank')">
                    Zobacz projekt
                </button>
            </div>
            <div class="col-md-6 d-flex align-items-center overflow-hidden
                    px-0 order-1 order-sm-1 order-md-2 ">
                <img src="img/card_3.jpg"
                    class="img-fluid align-items-center img--hover h-100 w-100"
                    alt="programming"></div>
        </div>
        <div class="row hide--project bootstrap">
            <div class="col-md-6 d-flex align-items-center overflow-hidden
                    px-0">
                <img src="img/card_4.jpg"
                    class="img-fluid align-items-center img--hover h-100 w-100"
                    alt="programming"></div>
            <div class="col-md-6 card__cont ">
                <h3 class="text-center text-uppercase">klinika
                    weterynaryjna
                </h3>
                <hr>
                <p>Strona została zakodowana przy użyciu:</p>
                <ul>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Grid Layout</li>
                    <li>Responsive web design</li>
                    <li>JavaScript</li>
                    <li>JQuery</li>
                    <li>Bootstrap4</li>
                </ul>
                <button class="card__button"
                    type="button"
                    onclick="window.open('https://jacekmaciejak.github.io/Veterinary-clinic/.','_blank')">
                    Zobacz projekt
                </button>
            </div>
        </div>

    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 220">
        <path fill="#fff"
            fill-opacity="1"
            d="M0,96L40,112C80,128,160,160,240,160C320,160,400,128,480,122.7C560,117,640,139,720,133.3C800,128,880,96,960,96C1040,96,1120,128,1200,138.7C1280,149,1360,139,1400,133.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
</section>