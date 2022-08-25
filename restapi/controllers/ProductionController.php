<?php

namespace restapi\controllers;



use restapi\models\Product;
use Yii;
use yii\rest\Controller;
use yii\web\Response;

class ProductionController extends Controller
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
            'index'  => ['GET', 'HEAD'],
            'view'  => ['GET', 'HEAD'],
            'create' => ['POST'],
            'update' => ['PUT', 'PATCH'],
            'delete' => ['DELETE'],
        ];
    }


    public function actionIndex()
    {
        return  Product::find()->all();

    }

   public function actionCreate(){

        $model = new Product();
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

    public function actionView($id){

        $model = Product::findOne($id);

        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }

        return $model;
    }

    public function actionUpdate($id){

        $model = Product::findOne($id);

        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
                ];
        }

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

    public function actionDelete($id)
    {
        $model = Product::findOne($id);
        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }

        $model->delete();

        return [
            'status' => 200,
            'message' => 'Success!  Delete',
        ];

    }

}