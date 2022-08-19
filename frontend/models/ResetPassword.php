<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class ResetPassword extends Model
{
    public $password;
    public $restPassword;

    public function rules()
    {
        return [

            ['password', 'required'],
            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],

            ['restPassword', 'required'],
            ['restPassword', 'string', 'min' => Yii::$app->params['user.passwordMinLength']],
        ];
    }

}