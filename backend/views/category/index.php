<?php

use backend\models\Categories;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;

use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\CategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategoriyalar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categories-index">

    <p>
        <?= Html::a('Kategoriya qo`shish  <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(' <i class="fa fa-refresh"></i>', ['index'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Categories $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                'template' => '{view} {update} {delete}',
                'buttons'=>[
                    'view' => function($url, $model){

                        return Html::a('<i class="fa fa-eye" style="color: #fff;"></i>', ['category/view', 'id' =>$model->id], ['class'=>'btn btn-info']);
                    },
                    'update' => function($url, $model){

                        return Html::a('<i class="fa fa-pencil" style="color: #fff;"></i>', ['category/update', 'id' =>$model->id], ['class'=>'btn btn-info']);
                    },
                    'delete' => function($url, $model){

                        return Html::a('<i class="fa fa-trash" style="color: #fff;"></i>', ['category/delete', 'id' =>$model->id],
                            [
                                'class'=>'btn btn-danger',
                                'data' => [
                                    'confirm' => 'Haqiqatan ham bu elementni o??chirib tashlamoqchimisiz?',
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
