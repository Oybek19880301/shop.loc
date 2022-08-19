<?php
/**@var $model \frontend\controllers\SiteController*/

use yii\widgets\ActiveForm;

?>
<div class="container">
    <?php if (Yii::$app->session->hasFlash('success')):?>
        <div class="alert alert-success alert-dismissible mt-4 mb-4">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?= Yii::$app->session->getFlash('success')?></strong>
        </div>
    <?php endif;?>
    <?php if (Yii::$app->session->hasFlash('danger')):?>
        <div class="alert alert-danger alert-dismissible mt-4 mb-4">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?= Yii::$app->session->getFlash('danger')?></strong>
        </div>
    <?php endif;?>
</div>
<div class="container">
    <div class="row p-3">
        <h3>My Orders</h3>
        <div class="col-md-12">

        </div>
    </div>
</div>

<hr>

<div class="container">
    <h3 class="text-center p-3">My Account</h3>
    <div class="row p-3">
        <div class="col-md-6">
            <table class="table  table-bordered table-hover">
                <tr>
                    <th>Username:</th>
                    <th><?= Yii::$app->user->identity->username?></th>
                </tr>
                <tr>
                    <th>Email:</th>
                    <th><?= Yii::$app->user->identity->email?></th>
                </tr>
            </table>
        </div>
          <div class="col-md-6">
            <div class="card card-body">
                <?php $form = ActiveForm::begin()?>

                    <?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Password...']) ?>

                    <?= $form->field($model, 'restPassword')->passwordInput(['placeholder'=>'Rest Password...']) ?>

                    <button type="submit" class="btn btn-info">Save</button>
                <?php $form = ActiveForm::end()?>

            </div>
        </div>
    </div>
</div>


<style>
    .help-block{
        color: red;
    }

</style>




