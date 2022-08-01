<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */

$this->title = 'Kategoriyani yangilash ';
$this->params['breadcrumbs'][] = ['label' => 'Kategoriyalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="categories-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
