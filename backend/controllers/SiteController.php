<?php

namespace backend\controllers;

use backend\models\Orders;
use backend\models\User;
use common\models\LoginForm;

use Yii;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends AuthController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $countOrders = Orders::find()->count('id');
        return $this->render('index', compact('countOrders'));
    }

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'main-login';

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionUsers()
    {
        $data = User::find()->asArray()->all();
        return $this->render('users', compact('data'));
    }
}
