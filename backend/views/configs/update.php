<?php


use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Configs */

$this->title = 'Konfiguratsiyani yangilsh ';
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="configs-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
