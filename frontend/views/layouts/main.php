<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use frontend\models\Category;
use frontend\models\Config;
use yii\bootstrap4\Html;
use yii\helpers\Url;

AppAsset::register($this);

$config = Config::findOne(2);
$categories = Category::find()->asArray()->limit(4)->all();
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
<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="<?= Url::home()?>"><img src="template/img/logo.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="<?= Url::home()?>"><?=Yii::t('app', 'home')?></a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="<?=Url::to(['productions/index'])?>" class="nav-link " ><?=Yii::t('app', 'all_productions')?></a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false"><?=Yii::t('app', 'categories')?></a>
                            <ul class="dropdown-menu">
                                <?php foreach ($categories as $category):?>
                                   <li class="nav-item"><a class="nav-link" href="<?= Url::to(['productions/category', 'id'=>$category['id']])?>"><?= $category['name']?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="<?= Url::to(['site/contact'])?>"><?=Yii::t('app', 'contact')?></a></li>
                    </ul>

                    <ul class="nav-shop">
                        <li class="nav-item"><button><i class="ti-search"></i></button></li>
                        <li class="nav-item"><a href="<?= Url::to(['site/profile'])?>"><button><i class="ti-shopping-cart"></i></button></a></li>
                        <li class="nav-item"><a href="/uz">uz</a></li>/
                        <li class="nav-item"><a href="/ru">ru</a></li>/
                        <li class="nav-item"><a href="/en">en</a></li>
                        <?php if (Yii::$app->user->isGuest):?>
                            <li class="nav-item"><a href="<?= Url::to(['site/login'])?>"><?=Yii::t('app', 'login')?></a></li>
                        <?php endif;?>
                        <?php if (!Yii::$app->user->isGuest):?>
                          <?= Yii::$app->user->identity->email?>
                        <?=
                            Html::a('Logout', ['site/logout'],[
                                'data' => [
                                    'confirm' => 'Haqiqatan ham chiqmoqchimisiz?',
                                    'method' => 'post',
                                ],
                            ])
                            ?>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->
<?=$content?>
<!--================ Start footer Area  =================-->
<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="offset-sm-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Social Media</h4>
                        <p>
                           <ul class="list">
                            <li><a href="https://t.me/<?=$config['telegram']?>">Telegram</a></li>
                            <li><a href="<?=$config['instagram']?>">Instagram</a></li>
                            <li><a href="<?=$config['youtube']?>">Youtube</a></li>
                            <li><a href="<?=$config['facebook']?>">Facebook</a></li>

                        </ul>
                        </p>
                        <p>

                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Quick Links</h4>
                        <ul class="list">
                            <li><a href="<?= Url::home()?>">Home</a></li>
                            <li><a href="<?= Url::to(['productions/index'])?>">All Productions</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="<?= Url::to(['site/contact'])?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h4 class="footer_title">Gallery</h4>
                        <ul class="list instafeed d-flex flex-wrap">
                            <li><img src="template/img/gallery/r1.jpg" alt=""></li>
                            <li><img src="template/img/gallery/r2.jpg" alt=""></li>
                            <li><img src="template/img/gallery/r3.jpg" alt=""></li>
                            <li><img src="template/img/gallery/r5.jpg" alt=""></li>
                            <li><img src="template/img/gallery/r7.jpg" alt=""></li>
                            <li><img src="template/img/gallery/r8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span>
                                Head Office
                            </p>
                            <p><?= $config['address']?></p>

                            <p class="sm-head">
                                <span class="fa fa-phone"></span>
                                Phone Number
                            </p>
                            <p>
                               <?= $config['phone']?>
                            </p>

                            <p class="sm-head">
                                <span class="fa fa-envelope"></span>
                                Email
                            </p>
                            <p>
                               <?= $config['email']?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://t.me/oybekIT" target="_blank">Telegram manzilim</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
