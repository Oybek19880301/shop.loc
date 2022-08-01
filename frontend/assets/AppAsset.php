<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css",
        "https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css",
        "template/css/bootstrap.min.css",
        "template/css/style.css",
        "template/css/responsive.css",
        "template/css/jquery.mCustomScrollbar.min.css",
        "template/css/owl.carousel.min.css",
    ];
    public $js = [
      "https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js",
      "template/js/jquery.min.js",
      "template/js/popper.min.js",
      "template/js/bootstrap.bundle.min.js",
      "template/js/jquery-3.0.0.min.js",
      "template/js/plugin.js",
      "template/js/jquery.mCustomScrollbar.concat.min.js",
      "template/js/custom.js",
      ];
    public $depends = [
        'yii\web\YiiAsset',
 //       'yii\bootstrap4\BootstrapAsset',
    ];
}
