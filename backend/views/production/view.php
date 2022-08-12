<?php

use backend\models\Image;

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Production */
/* @var $newModel backend\models\Image */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Mahsulotlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$images = Image::find()->where(['productions_id'=>$model->id])->all();

date_default_timezone_set('Asia/Tashkent');
?>
<div class="production-view">

    <p>
        <?= Html::a('O`zgartirish', ['update', 'id' => $model->id], ['class' => 'btn btn-info']) ?>
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
            [
                'attribute' => 'create_at',
                'format'    => 'raw',
                'value' => function($model){
                    return date('Y-M-d G:h:s', $model->create_at);
                }
            ],
            [
                'attribute' => 'update_at',
                'format'    => 'raw',
                'value' => function($model){
                    if($model->update_at != null){
                        return date('Y-m-d G:h:s', $model->update_at);
                    }
                    return 'Yangilanmagan';
                }
            ],
            [
                'attribute' => 'default_img',
                'format'    => 'raw',
                'value'     => function($model){
                    return "<img src='/upload/$model->default_img' style='width: 400px; height: 300px; object-fit: cover'>";
                }
            ],
        ],
    ]) ?>

    <div class="row">
        <div class="col-md-12">
            <h3>Ko`proq rasmlar</h3>
            <p>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                    Rasm qo`shish <i class="fa fa-plus"></i>
                </button>
            </p>
        </div>
        <?php foreach ($images as $image): ?>
            <div class="col-md-3">
                <img style="height: 200px" class="img-rounded" src="/upload/<?= $image['name']?>" width="100%" alt=""><br><br>
                <a href="<?= \yii\helpers\Url::to(['production/delete-img', 'id'=>$image['id'], 'key'=>$model->id])?>" class="btn btn-danger">O`chirish</a><br><br>
            </div>
        <?php endforeach;?>
    </div>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><?= $model->name?></h4>
            </div>
            <?php $form = ActiveForm::begin()?>
            <div class="modal-body">
                  <?= $form->field($newModel, 'name')->fileInput()->label('Rasm')?>
                  <?= $form->field($newModel, 'productions_id')->input('hidden', ['value'=>$model->id])?>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-info">Saqlash</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger">Bekor qilish</button>
            </div>
            <?php $form = ActiveForm::end()?>
        </div>
    </div>
</div>

