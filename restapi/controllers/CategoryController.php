<?php

namespace restapi\controllers;

use restapi\models\Category;
use Yii;
use yii\web\Response;

class CategoryController extends \yii\rest\Controller
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
        return Category::find()->all();

    }

    public function actionCreate()
    {
        $model = new Category();

        if ($model->load(Yii::$app->request->post(), '') && $model->save()){
            return [
                'status'  => 200,
                'message' => 'Success!',
                'data'    => $model
            ];
        }
        $model->validate();

        return $model;
    }

    public function actionView($id)
    {
        $model = Category::findOne($id);
        if (!$model){
            return [
                'status'  => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }
        return $model;
    }

    public function actionUpdate($id)
    {
        $model = Category::findOne($id);

        if (!$model){
            return [
                'status'  => 404,
                'message' => 'The parameter with this ID is loaded',

            ];
        }

        if ($model->load(Yii::$app->request->post(), '') && $model->save()){
            return [
                'status' => 200,
                'message' => 'Success',
                'data'    => $model,
            ];
        }

        return $model;
    }

    public function actionDelete($id)
    {
        $model = Category::findOne($id);

        if (!$model){

           return  [
               'status'  => 404,
               'message' => 'The parameter with this ID is loaded',
           ];

        }
         $model->delete();

         return [
             'status' => 200,
             'message' => 'Success! Delete',
         ];
    }

}