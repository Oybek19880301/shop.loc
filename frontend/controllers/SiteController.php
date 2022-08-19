<?php

namespace frontend\controllers;

use common\models\User;
use frontend\models\Config;
use frontend\models\Contacts;
use frontend\models\Production;
use frontend\models\ResetPassword;
use Yii;
use common\models\LoginForm;
use frontend\models\SignupForm;

/**
 * Site controller
 */
class SiteController extends AppController
{

    public function actionIndex()
    {
        $banner = Production::findOne(['degree'=>1]);
        $productions = Production::find()->where(['status'=>1])->all();

        return $this->render('index', compact('banner', 'productions'));

    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

//    public function actionEmail()
//    {
//        Yii::$app->mailer->compose()
//            ->setFrom('oraxmatov2707@gmail.com')
//            ->setTo('oraxmatov2707@gmail.com')
//            ->setSubject('Shop.loc')
//            ->setHtmlBody('<b>Pochta bordi</b>')
//            ->send();
//    }

    public function actionContact()
    {
       $model = new Contacts();
       $config = Config::findOne(2);
       if($model->load(Yii::$app->request->post()) && $model->save()){
           Yii::$app->session->setFlash('success', 'Your message has been successfully saved!');
           return $this->goHome();
       }

        return $this->render('contact', compact('model', 'config'));

    }

    public function actionProfile()
    {
        $restPassword = new ResetPassword();

        if ($restPassword->load(Yii::$app->request->post()) && $restPassword->validate()){

            if($restPassword->password != $restPassword->restPassword){

                Yii::$app->session->setFlash('denger', 'Passwords do not match');
                return $this->redirect(['site/profile']);
            }

            $user = User::findOne(Yii::$app->user->getId());
            $user->password_hash = Yii::$app->security->generatePasswordHash($restPassword->password);
            $user->save();

            Yii::$app->session->setFlash('success', 'Success');
            return $this->redirect(['site/profile']);
        }

        return $this->render('profile', [
            'model' => $restPassword,
        ]);
    }

}
