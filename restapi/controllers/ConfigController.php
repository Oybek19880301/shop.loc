<?php

namespace restapi\controllers;

use restapi\models\Config;
use Yii;
use yii\rest\Controller;
use yii\web\Response;

class ConfigController extends Controller
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
            'update' => ['PUT', 'PATCH'],
        ];
    }

    public function actionIndex()
    {
        return Config::find()->all();
    }

    public function actionUpdate($id)
    {
        $model = Config::findOne($id);

        if (!$model){
            return [
                'status' => 404,
                'message' => 'The parameter with this ID is loaded',
            ];
        }

        if ($model->load(Yii::$app->request->post(), '') && $model->save()){

            return [
                $model->errors,
                'status' =>200,
                'message' => 'Success!',
                'data'  => $model,

            ];
        }
        $model->validate();

        return $model;

    }

}