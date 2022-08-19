<?php
/** @var $model \frontend\models\Contacts*/
/** @var $config \frontend\controllers\SiteController*/

use yii\widgets\ActiveForm;
?>
<!-- ================ start banner area ================= -->

				<div class="text-center m">
					<h1>Contact Us</h1>
			</div>


	<!-- ================ end banner area ================= -->

	<!-- ================ contact section start ================= -->
    <section class="section-margin--small">
    <div class="container">
      <div class="row">
            <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3><?= $config['address']?></h3>
                    </div>
                </div>
                <br>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                    <div class="media-body">
                        <h3><a href="tel:<?= $config['phone']?>"><?= $config['phone']?></a></h3>
                    </div>
                </div>
                <br>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><a href="mailto:<?= $config['email']?>"><?= $config['email']?></a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <?php $form = ActiveForm::begin([
                        'id'=> 'contactForm',
                        'options' => [
                                'class' => 'form-contact contact_form',
                        ]
                ])?>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <?= $form->field($model, 'name')->textInput(['placeholder'=>'Name...'])->label(false)?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'phone')->textInput(['placeholder'=>'Phone...'])->label(false)?>
                            </div>
                            <div class="form-group">
                                <?= $form->field($model, 'email')->textInput(['placeholder'=>'Email...'])->label(false)?>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <?= $form->field($model, 'message')->textarea(['placeholder'=>'Text...'])->label(false)?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <button type="submit" class="button button--active button-contactForm">Send Message</button>
                    </div>
                    <?php $form = ActiveForm::end()?>
            </div>
        </div>
        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1707&amp;height=400&amp;hl=en&amp;q=Qamashi Antiqa&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    </div>
  </section>

<style>
    .help-block{
        color: red;
    }
</style>
