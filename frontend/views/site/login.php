<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\ActiveForm;

$this->title = 'Kirish-';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="login_box_area mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>New to our website?</h4>
                        <a class="button button-account" href="<?= \yii\helpers\Url::to(['site/signup'])?>">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <?php $form = ActiveForm::begin([
                        'id' => 'contactForm',
                        'options' => ['class=row login_form']

                    ]); ?>
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder'=>'Username...']) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password...']) ?>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-login w-100">Log In</button>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


