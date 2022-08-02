<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Production */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="production-form">
    <div class="container-fluid">
        <div class="row">
                <?php $form = ActiveForm::begin(); ?>
            <div class="col-md-4">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'category_id')->textInput() ?>

                <?= $form->field($model, 'status')->textInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-info']) ?>
                </div>
            </div>
            <div class="col-md-4">

                <?= $form->field($model, 'default_img')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'count')->textInput() ?>

                <?= $form->field($model, 'price')->textInput() ?>
            </div>
            <div class="col-md-4">

                <?= $form->field($model, 'degree')->textInput() ?>

                <?= $form->field($model, 'create_at')->textInput() ?>

                <?= $form->field($model, 'update_at')->textInput() ?>

            </div>

                <?php ActiveForm::end(); ?>

        </div>
    </div>


</div>
