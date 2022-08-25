<?php

namespace restapi\controllers;

use restapi\models\Image;
use Yii;
use yii\rest\Controller;
use yii\web\Response;

class ImageController extends Controller
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
            'index' =>  ['GET', 'HEAD'],
            'view' =>   ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE']

        ];
    }

    public function actionIndex()
    {
        return Image::find()->all();
    }

    public function actionView($id)
    {
        $model = Image::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',

            ];
        }
        return $model;
    }

    public function actionCreate()
    {
        $model = new Image();

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

    public function actionUpdate($id)
    {
        $model = Image::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }

        if ($model->load(Yii::$app->request->post(), '') && $model){
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
        $model = Image::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }
        $model->delete();
        return [
            'status' => 200,
            'message' => 'Success',
        ];
    }
}