<?php

use backend\models\Contacts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\ContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Xabarlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-index">

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'name',
            'phone',
            'email:email',
//            'message:ntext',
            [
                'attribute' => 'status',
                'format'    => 'raw',
                'value'     => function($model) {
                    if ($model->status == 0)
                       $val = '<b style="color: green">Yangi habar <i class="fa fa-envelope-o"></i></b>';
                    else
                        $val = '<b>O`qilgan</b>';
                    return $val;
                }
            ],
            'create_at',
//            'update_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Contacts $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },

                'template' => '{view} ',
                'buttons'=>[
                    'view' => function($url, $model){

                        return Html::a('<i class="fa fa-eye" style="color: #fff;"></i>', ['contacts/view', 'id' =>$model->id], ['class'=>'btn btn-info']);
                    },
//                    'delete' => function($url, $model){
//
//                        return Html::a('<i class="fa fa-trash" style="color: #fff;"></i>', ['contacts/delete', 'id' =>$model->id],
//                            [
//                                'class'=>'btn btn-danger',
//                                'data' => [
//                                    'confirm' => 'Haqiqatan ham bu elementni oʻchirib tashlamoqchimisiz?',
//                                    'method' => 'post',
//                                ],
//
//                            ]);
//                    }
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
