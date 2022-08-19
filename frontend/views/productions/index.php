<?php
/**@var $categories \frontend\controllers\ProductionsController*/

?>

<section class="mt-4 calc-60px">
  <?php foreach ($categories as $category): ?>
    <div class="container">
        <div class="section-intro pb-60px">
            <h2><span class="section-intro__style"><?=$category['name']?></span></h2>
        </div>
        <div class="owl-carousel owl-theme owl-loaded owl-drag" id="bestSellerCarousel">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(-1440px, 0px, 0px); transition: all 0s ease 0s; width: 5760px;">
                    <div class="owl-item" style="width: 330px; margin-right: 30px;">
                        <div class="card text-center card-product">
                            <div class="card-product__img">
                                <img class="img-fluid" src="/img/product/product1.png" alt="">
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
                </div>
            </div>
            <div class="owl-nav">
                <button type="button" role="presentation" class="owl-prev"><i class="ti-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="ti-arrow-right"></i></button>
            </div>
            <div class="owl-dots disabled">
            </div>
        </div>
    </div>
  <?php endforeach;?>
</section>








