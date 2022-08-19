<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--================Login Box Area =================-->
<section class="login_box_area mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>Already have an account?</h4>
                        <a class="button button-account" href="<?=Url::to(['site/login'])?>">Login Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner register_form_inner">
                    <h3>Create an account</h3>

                    <?php $form = ActiveForm::begin([
                            'id'      => 'register_form',
                            'options' =>[
                                    'class' => 'row login_form',
                            ],
                        ]); ?>

                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>'Username...']) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'email')->input('email',['placeholder'=>'Email...']) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password...']) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-register w-100">Register</button>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->


