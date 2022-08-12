<?php

use backend\models\Orders;
use backend\models\Production;
use common\models\OrderStatus;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\OrdersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Buyurtmalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'fullName',
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
            //'create_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Orders $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                'template' => '{view} {delete}',
                'buttons'=>[
                    'view' => function($url, $model){

                        return Html::a('<i class="fa fa-eye" style="color: #fff;"></i>', ['orders/view', 'id' =>$model->id], ['class'=>'btn btn-info']);
                    },
                    'delete' => function($url, $model){

                        return Html::a('<i class="fa fa-trash" style="color: #fff;"></i>', ['orders/delete', 'id' =>$model->id],
                            [
                                'class'=>'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Haqiqatan ham bu elementni oʻchirib tashlamoqchimisiz?',
                                    'method' => 'post',
                                ],

                            ]);
                    }
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
