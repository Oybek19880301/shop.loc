<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Production */

$this->title = 'Mahsulotni o`zgartirish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'O`zgartirish';
?>
<div class="production-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
