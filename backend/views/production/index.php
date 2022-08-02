<?php

use backend\models\Production;
use kartik\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;

use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\Production */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahsulotlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="production-index">

    <p class="pull-left">
        <?= Html::a('Yangi mahsulot qo`shish <i class="fa fa-plus"></i>', ['create'], ['class' => 'btn btn-info']) ?>

    </p>
    <p class="pull-right">
        <?= Html::a('Kategoriyalar', ['category/index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a('<i class="fa fa-refresh"></i>', ['index'], ['class' => 'btn btn-info']) ?>
    </p><br><br>

    <?php Pjax::begin(); ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'category_id',
            'status',
            //'default_img',
            //'count',
            'price',
            //'degree',
            //'create_at',
            //'update_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Production $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
                'template' => '{view} {update} {delete}',

            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
