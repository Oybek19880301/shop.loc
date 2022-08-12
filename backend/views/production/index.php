<?php

use backend\models\Production;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ProductionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahsulotlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-index">
    <p class="pull-left">
        <?= Html::a('Mahsulot qo`shish <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-info']) ?>

    </p>

    <p class="pull-right">
        <?= Html::a('<i class="fa fa-refresh"></i>', ['index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('Kategoriyalar', ['category/index'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <a class="btn btn-info" style="margin-left: 8px;" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Izlash <i class="fa  fa-chevron-circle-down"></i>
    </a>

    <div class="collapse" id="collapseExample">
        <div class="well">
            <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            [
                'attribute' => 'category_id',
                'format'    => 'raw',
                'value' => function($model){
                    return \backend\models\Categories::findOne(['id'=>$model->category_id])->name;
                }
            ],
            [
                'attribute' => 'status',
                'format'    => 'raw',
                'value' => function($model){
                    if ($model->status == 1){
                        $val = '<b>Aktiv</b>';
                    }else{
                        $val = '<b>Aktiv emas</b>';
                    }

                    return $val;
                }
            ],
            [
                'attribute' => 'count',
                'format'    => 'raw',
                'value'     => function($model){
                    $val = $model->count;
                    return $val;
                }

            ],
            [
                'attribute' => 'price',
                'format'    => 'raw',
                'value'     => function($model){
                    $val = $model->price;
                    return $val;
                }

            ],
            [
                'attribute' => 'degree',
                'format'    => 'raw',
                'value' => function($model){
                    if ($model->degree == 1){
                        $val = '<b>Bannerda</b>';
                    }else{
                        $val = '<b>Bannerda emas</b>';
                    }

                    return $val;
                }
            ],
//            [
//                'attribute' => 'default_img',
//                'format'    => 'raw',
//                'value'     => function($model){
//                    return "<img src='/upload/$model->default_img' style='width: 400px; height: 300px; object-fit: cover'>";
//                }
//            ],
            //'create_at',
            //'update_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Production $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'template' => '{view} {update} {delete}',
                'buttons'=>[
                        'view' => function($url, $model){

                            return Html::a('<i class="fa fa-eye" style="color: #fff;"></i>', ['production/view', 'id' =>$model->id], ['class'=>'btn btn-info']);
                        },
                        'update' => function($url, $model){

                            return Html::a('<i class="fa fa-pencil" style="color: #fff;"></i>', ['production/update', 'id' =>$model->id], ['class'=>'btn btn-info']);
                            },
                        'delete' => function($url, $model){

                            return Html::a('<i class="fa fa-trash" style="color: #fff;"></i>', ['production/delete', 'id' =>$model->id],
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
