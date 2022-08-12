<?php

namespace backend\controllers;

use backend\models\Image;
use backend\models\Production;
use backend\models\search\ProductionSearch;
use yii\web\NotFoundHttpException;


/**
 * ProductionController implements the CRUD actions for Production model.
 */
class ProductionController extends AuthController
{
    /**
     * Lists all Production models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ProductionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Production model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $newModel = new Image();
        if ($newModel->load(\Yii::$app->request->post()) && $newModel->mySave()) {
            \Yii::$app->session->setFlash('success', 'Saqlash');
            $newModel = new Image();
            return $this->render('view', [
                'model'    => $this->findModel($id),
                'newModel' => $newModel,
            ]);
        }
            return $this->render('view', [
                'model' => $this->findModel($id),
                'newModel' => $newModel,
            ]);

    }

    /**
     * Creates a new Production model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Production();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())){
                $model->create_at = strtotime(date('Y-m-d G:h:s'));
                $model->update_at = null;
                $model->mySave();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Production model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Production model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Production model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Production the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Production::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDeleteImg($id, $key)
    {
        $img = Image::findOne($id);
        $img->delete();
        return $this->redirect(["production/view?id=$key"]);
    }

}
