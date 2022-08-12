<?php

use backend\models\Production;
use common\models\OrderStatus;
use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Orders */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Buyurtmalar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="orders-view">
    <p>
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
            [
                'attribute'  => 'phone',
                'format'     => 'raw',
                'value'      => function($model){
                    return $model->fullName;
                }
            ],
            [
                'attribute'  => 'phone',
                'format'     => 'raw',
                'value'      => function($model){
                    return $model->phone;
                }
            ],
            [
                'attribute'  => 'productions_id',
                'format'     => 'raw',
                'value'      => function($model){
                    return Production::findOne(['id'=>$model->productions_id])->name;
                }
            ],
            [
                'attribute' => 'count',
                'format'    => 'raw',
                'value'     => function($model){
                    return $model->count . ' ta';
                }
            ],
            [
                'attribute' => 'status',
                'format'    => 'raw',
                'value'    => function($model){
                    if($model->status == OrderStatus::STATUS_NEW){
                        return 'Yangi';
                    }elseif ($model->status == OrderStatus::STATUS_HOLD){
                        return 'Jarayonda';
                    }elseif ($model->status == OrderStatus::STATUS_FINISH)
                        return 'Mahsulot yetkazilgan';

                },
            ],
            'create_at',
        ],
    ]) ?>
 <?php if ($model->status != OrderStatus::STATUS_FINISH): ?>
    <a href="<?= \yii\helpers\Url::to(['orders/status', 'id'=>$model->id, 'key'=>1])?>" class="btn btn-info">Kutish jaroyonida</a>
    <a href="<?= \yii\helpers\Url::to(['orders/status', 'id'=>$model->id, 'key'=>2])?>" class="btn btn-success">Yitkazildi</a>
 <?php endif;?>

</div>
