<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Production */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="production-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder'=>'Mahsulot nomi...']) ?>

                <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(\backend\models\Categories::find()->all(), 'id', 'name'), ['prompt'=>'Kategoriyani tanlang']) ?>

                <?= $form->field($model, 'status')->dropDownList(['1'=>'Aktiv', '0'=>'Aktiv emas'], ['prompt'=>'Holatni tanlang']) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-info']) ?>
                </div>

            </div>
            <div class="col-md-4">

                <?= $form->field($model, 'degree')->dropDownList(['1'=>'Bannerga chiqsin', '0'=>'Bannerga chiqmasin'], ['prompt'=>'Bannerga chiqishini tanlang']) ?>

                <?= $form->field($model, 'count')->input('number', ['placeholder'=>'Sonini kiritng']) ?>

                <?= $form->field($model, 'price')->input('number', ['placeholder'=>'Narxini kiritng']) ?>

            </div>
            <div class="col-md-4">

                <?= $form->field($model, 'default_img')->fileInput() ?>

            </div>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
