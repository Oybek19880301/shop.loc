<?php

namespace restapi\controllers;

use restapi\models\Order;
use Yii;
use yii\rest\Controller;
use yii\web\Response;

class OrderController extends Controller
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
            'view' => ['GET', 'HEAD'],
            'update' => ['PUT', 'PATCH'],
            'create' => ['POST'],
            'delete' => ['DELETE'],
        ];
    }

    public function actionIndex()
    {
        return Order::find()->all();
    }

    public function actionView($id)
    {
        $model = Order::findOne($id);
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
        $model = new Order();

        if ($model->load(Yii::$app->request->post(), '') && $model->save()){
            return [
                'status' =>200,
                'message' => 'Success!',
                'data'  => $model,
            ];
        }
        $model->validate();
        return $model;
    }

    public function actionUpdate($id)
    {
        $model = Order::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded'
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
        $model = Order::findOne($id);
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