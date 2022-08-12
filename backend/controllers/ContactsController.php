<?php

namespace backend\controllers;

use backend\models\Contacts;
use backend\models\search\ContactsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * ContactsController implements the CRUD actions for Contacts model.
 */
class ContactsController extends AuthController
{
    /**
     * Lists all Contacts models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ContactsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contacts model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $message = Contacts::findOne(['id' => $id]);
        $message->status = 1;
        $message->save();
        return $this->render('view', [
            'model' => $message,
        ]);
    }



}
