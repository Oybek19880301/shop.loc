<?php
/**@var $banner \frontend\controllers\SiteController*/
/**@var $productions \frontend\controllers\SiteController*/
use frontend\models\Category;
use yii\helpers\Url;

$this->title = 'Shop';
?>

<main class="site-main">
    <div class="container">
        <?php if (Yii::$app->session->hasFlash('success')):?>
            <div class="alert alert-success alert-dismissible mt-4 mb-4">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong><?= Yii::$app->session->getFlash('success')?></strong>
            </div>
        <?php endif;?>
    </div>
  <!--================ Hero banner start =================-->
  <section class="hero-banner">
    <div class="container">
      <div class="row no-gutters align-items-center pt-60px">
        <div class="col-5 d-none d-sm-block">
          <div class="hero-banner__img">
            <img class="img-fluid" src="/upload/<?= $banner['default_img']?>" alt="">
          </div>
        </div>
        <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
          <div class="hero-banner__content">
            <h4><?= $banner['price']?>UZS</h4>
            <h4><?= $banner['name']?></h4>
            <p><?= Category::findOne($banner['category_id'])->name?></p>
            <a class="button button-hero" href="<?=Url::to(['productions/order', 'id'=>$banner['id']])?>">Shopping</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero banner start =================-->

  <!--================ Hero Carousel start =================-->
  <section class="section-margin ">
    <div class="owl-carousel owl-theme hero-carousel">
        <?php foreach ($productions as $production):?>
            <div class="hero-carousel__slide">
                <img src="/upload/<?= $production['default_img']?>" alt="" class="img-fluid" style="height: 350px;">
                <a href="<?=Url::to(['productions/order', 'id'=>$production['id']])?>" class="hero-carousel__slideOverlay">
                  <h3><?= $production['name']?></h3>
                  <p><?= $production['price']?>UZS</p>
                </a>
             </div>
        <?php endforeach;?>
    </div>
  </section>
  <!--================ Hero Carousel end =================-->

  <!-- ================ trending product section start ================= -->
  <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Trending <span class="section-intro__style">Product</span></h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product1.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Accessories</p>
              <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product2.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Beauty</p>
              <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product3.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Decor</p>
              <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product4.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Decor</p>
              <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product5.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Accessories</p>
              <h4 class="card-product__title"><a href="single-product.html">Man Office Bag</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product6.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Kids Toy</p>
              <h4 class="card-product__title"><a href="single-product.html">Charging Car</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product7.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Accessories</p>
              <h4 class="card-product__title"><a href="single-product.html">Blutooth Speaker</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="card-img" src="img/product/product8.png" alt="">
              <ul class="card-product__imgOverlay">
                <li><button><i class="ti-search"></i></button></li>
                <li><button><i class="ti-shopping-cart"></i></button></li>
                <li><button><i class="ti-heart"></i></button></li>
              </ul>
            </div>
            <div class="card-body">
              <p>Kids Toy</p>
              <h4 class="card-product__title"><a href="#">Charging Car</a></h4>
              <p class="card-product__price">$150.00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ trending product section end ================= -->


  <!-- ================ offer section start ================= -->
  <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
    <div class="container">
      <div class="row">
        <div class="col-xl-5">
          <div class="offer__content text-center">
            <h3>Up To 50% Off</h3>
            <h4>Winter Sale</h4>
            <p>Him she'd let them sixth saw light</p>
            <a class="button button--active mt-3 mt-xl-4" href="#">Shop Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ offer section end ================= -->

  <!-- ================ Best Selling item  carousel ================= -->
  <section class="section-margin calc-60px">
    <div class="container">
      <div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Best <span class="section-intro__style">Sellers</span></h2>
      </div>
      <div class="owl-carousel owl-theme" id="bestSellerCarousel">
        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product1.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Accessories</p>
            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product2.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Beauty</p>
            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product3.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product4.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product1.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Accessories</p>
            <h4 class="card-product__title"><a href="single-product.html">Quartz Belt Watch</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product2.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Beauty</p>
            <h4 class="card-product__title"><a href="single-product.html">Women Freshwash</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product3.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>

        <div class="card text-center card-product">
          <div class="card-product__img">
            <img class="img-fluid" src="img/product/product4.png" alt="">
            <ul class="card-product__imgOverlay">
              <li><button><i class="ti-search"></i></button></li>
              <li><button><i class="ti-shopping-cart"></i></button></li>
              <li><button><i class="ti-heart"></i></button></li>
            </ul>
          </div>
          <div class="card-body">
            <p>Decor</p>
            <h4 class="card-product__title"><a href="single-product.html">Room Flash Light</a></h4>
            <p class="card-product__price">$150.00</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Best Selling item  carousel end ================= -->






</main>
