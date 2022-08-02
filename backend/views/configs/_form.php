<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Configs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="configs-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-info']) ?>
                </div>

            </div>
            <div class="col-md-6">

                <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'youtube')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
            </div>

        </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>
