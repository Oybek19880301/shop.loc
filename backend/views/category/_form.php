<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="categories-form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder'=>'Kategoriya nomi...']) ?>

                <?= $form->field($model, 'create_at')->input('hidden', ['value'=>strtotime(date('Y-m-d G:m:s'))])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Saqlash', ['class' => 'btn btn-info']) ?>
                </div>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
