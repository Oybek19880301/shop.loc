<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Contacts */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Xabarlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contacts-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
//            'name',
            'phone',
            'email:email',
            'message:ntext',


        ],
    ]) ?>

</div>
