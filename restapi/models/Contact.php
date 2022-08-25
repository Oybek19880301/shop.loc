<?php

namespace restapi\models;

use yii\db\ActiveRecord;

class Contact extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%contact}}';
    }

    public function rules()
    {
        return [

            ['name', 'required'],
            ['name', 'string'],

            ['phone', 'required'],
            ['phone', 'integer'],

            ['email', 'required'],
            ['email', 'email'],

            ['message', 'required'],
            ['message', 'string'],

            ['status', 'required'],
            ['status', 'integer'],

            ['create_at', 'default','value'=>time()],
        ];
    }

}