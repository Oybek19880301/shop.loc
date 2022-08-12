<?php

use yii\helpers\Html;
use yii\web\YiiAsset;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Categories */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kategoriyalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
YiiAsset::register($this);
?>
<div class="categories-view">

    <p>
        <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('O`chirish', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Haqiqatan ham bu elementni oʻchirib tashlamoqchimisiz?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute' => 'create_at',
                'format'    => 'raw',
                'value'     => function($model){
                    return date('Y-M-d G:m:s', $model->create_at);
                }
            ],
            [
                'attribute' => 'update_at',
                'format'    => 'raw',
                'value'     => function($model){
                    if (!$model->update_at){
                        return '<span style="color: orange">Yangilanmagan!</span>';
                    }
                    return date('Y-M-d G:m:s', $model->update_at);
                }
            ],
        ],
    ]) ?>

</div>
