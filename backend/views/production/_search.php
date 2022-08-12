<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\ProductionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="production-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'count') ?>

    <?php  echo $form->field($model, 'price') ?>

    <?php  echo $form->field($model, 'degree') ?>

    <?php // echo $form->field($model, 'create_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Izlash', ['class' => 'btn btn-info']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
