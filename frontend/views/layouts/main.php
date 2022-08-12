<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/logo/favicon-16x16.png">
    <link rel="manifest" href="/logo/site.webmanifest">

    <?php $this->head() ?>
</head>
<body class="main-layout">
<?php $this->beginBody() ?>
<div class="header_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo"><a href="#"><img src="template/images/logo.png"></a></div>
            </div>
            <div class="col-sm-9">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="<?=Url::home()?>">Home</a>
                            <a class="nav-item nav-link" href="collection.html">Category</a>
                            <a class="nav-item nav-link" href="shoes.html">Shoes</a>
                            <a class="nav-item nav-link" href="racing boots.html">Racing Boots</a>
                            <a class="nav-item nav-link" href="contact.html">Contact</a>
                            <a class="nav-item nav-link last" href="#"><img src="template/images/search_icon.png"></a>
                            <a class="nav-item nav-link last" href="contact.html"><img src="template/images/shop_icon.png"></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="banner_section">
        <div class="container-fluid">
            <section class="slide-wrapper">
                <div class="container-fluid">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-2 padding_0">
                                        <p class="mens_taital">Men Shoes</p>
                                        <div class="page_no">0/2</div>
                                        <p class="mens_taital_2">Men Shoes</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="banner_taital">
                                            <h1 class="banner_text">New Running Shoes </h1>
                                            <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                            <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <button class="buy_bt">Buy Now</button>
                                            <button class="more_bt">See More</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="shoes_img"><img src="template/images/running-shoes.png"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-2 padding_0">
                                        <p class="mens_taital">Men Shoes</p>
                                        <div class="page_no">0/2</div>
                                        <p class="mens_taital_2">Men Shoes</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="banner_taital">
                                            <h1 class="banner_text">New Running Shoes </h1>
                                            <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                            <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <button class="buy_bt">Buy Now</button>
                                            <button class="more_bt">See More</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="shoes_img"><img src="template/images/running-shoes.png"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-2 padding_0">
                                        <p class="mens_taital">Men Shoes</p>
                                        <div class="page_no">0/2</div>
                                        <p class="mens_taital_2">Men Shoes</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="banner_taital">
                                            <h1 class="banner_text">New Running Shoes </h1>
                                            <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                            <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <button class="buy_bt">Buy Now</button>
                                            <button class="more_bt">See More</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="shoes_img"><img src="template/images/running-shoes.png"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-2 padding_0">
                                        <p class="mens_taital">Men Shoes</p>
                                        <div class="page_no">0/2</div>
                                        <p class="mens_taital_2">Men Shoes</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="banner_taital">
                                            <h1 class="banner_text">New Running Shoes </h1>
                                            <h1 class="mens_text"><strong>Men's Like Plex</strong></h1>
                                            <p class="lorem_text">ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <button class="buy_bt">Buy Now</button>
                                            <button class="more_bt">See More</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="shoes_img"><img src="template/images/running-shoes.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?=$content?>
<div class="section_footer">
    <div class="container">
        <div class="mail_section">
            <div class="row">
                <div class="col-sm-6 col-lg-2">
                    <div><a href="#"><img src="template/images/footer-logo.png"></a></div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="footer-logo"><img src="template/images/phone-icon.png"><span class="map_text">(71) 1234567890</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-logo"><img src="template/images/email-icon.png"><span class="map_text">Demo@gmail.com</span></div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="social_icon">
                        <ul>
                            <li><a href="#"><img src="template/images/face-icon.png"></a></li>
                            <li><a href="#"><img src="template/images/tele-icon.png"></a></li>
                            <li><a href="#"><img src="template/images/in-icon.png"></a></li>
                            <li><a href="#"><img src="template/images/youtube-icon.png"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <div class="footer_section_2">
            <div class="row">
                <div class="col-sm-4 col-lg-2">
                    <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet, consectetur  ipsum dolor sit amet,</p>
                </div>
                <div class="col-sm-4 col-lg-2">
                    <h2 class="shop_text">Address </h2>
                    <div class="image-icon"><img src="template/images/map-icon.png"><span class="pet_text">No 40 Baria Sreet 15/2 NewYork City, NY, United States.</span></div>
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3">
                    <h2 class="shop_text">Our Company </h2>
                    <div class="delivery_text">
                        <ul>
                            <li>Delivery</li>
                            <li>Legal Notice</li>
                            <li>About us</li>
                            <li>Secure payment</li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <h2 class="adderess_text">Products</h2>
                    <div class="delivery_text">
                        <ul>
                            <li>Prices drop</li>
                            <li>New products</li>
                            <li>Best sales</li>
                            <li>Contact us</li>
                            <li>Sitemap</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <h2 class="adderess_text">Newsletter</h2>
                    <div class="form-group">
                        <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                    </div>
                    <button class="subscribr_bt">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>
    <script>
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });


            $('#myCarousel').carousel({
                interval: false
            });

            //scroll slides on swipe for touch enabled devices

            $("#myCarousel").on("touchstart", function(event){

                var yClick = event.originalEvent.touches[0].pageY;
                $(this).one("touchmove", function(event){

                    var yMove = event.originalEvent.touches[0].pageY;
                    if( Math.floor(yClick - yMove) > 1 ){
                        $(".carousel").carousel('next');
                    }
                    else if( Math.floor(yClick - yMove) < -1 ){
                        $(".carousel").carousel('prev');
                    }
                });
                $(".carousel").on("touchend", function(){
                    $(this).off("touchmove");
                });
            });
    </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
