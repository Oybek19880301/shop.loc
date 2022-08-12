<?php

namespace backend\controllers;

use backend\models\Configs;
use yii\web\NotFoundHttpException;

/**
 * ConfigsController implements the CRUD actions for Configs model.
 */
class ConfigsController extends AuthController
{

    /**
     * Updates an existing Configs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {

            return $this->redirect(['site/index']);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Finds the Configs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Configs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Configs::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
