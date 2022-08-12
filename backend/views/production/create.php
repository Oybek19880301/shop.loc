<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Production */

$this->title = 'Mahsulot qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
