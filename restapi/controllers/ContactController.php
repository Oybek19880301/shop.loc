<?php

namespace restapi\controllers;

use restapi\models\Contact;
use Yii;
use yii\rest\Controller;
use yii\web\Response;

class ContactController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        return $behaviors;
    }

    protected function verbs()
    {
        return [
            'index' => ['GET', 'HEAD'],
            'create' => ['POST'],
            'view'  => ['GET', 'HEAD'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }

    public function actionIndex()
    {
        return Contact::find()->all();
    }

    public function actionCreate()
    {
        $model = new Contact();
        if($model->load(Yii::$app->request->post(), '') && $model->save()){
            return [
                'status'  => 200,
                'message' => 'Success!',
                'data'    => $model,
            ];
        }
        $model->validate();
        return $model;
    }

    public function actionView($id)
    {
        $model = Contact::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }
        return $model;
    }

    public function actionUpdate($id)
    {
        $model = Contact::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }
        if ($model->load(Yii::$app->request->post(), '') && $model->save()){
            return [
                'status' => 200,
                'message' => 'Success',
                'data' => $model,
            ];
        }

        $model->validate();
        return $model;

    }

    public function actionDelete($id)
    {
        $model = Contact::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }
        $model->delete();
        return [
            'status' => 200,
            'message' => 'Success delete',

        ];
    }

}