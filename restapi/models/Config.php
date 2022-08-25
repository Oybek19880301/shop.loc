<?php

namespace restapi\models;

use yii\db\ActiveRecord;

class Config extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%config}}';
    }

    public function rules()
    {
        return [

            ['phone','required'],
            ['phone', 'integer'],

            ['email', 'required'],
            ['email', 'email'],

            ['telegram', 'required'],
            ['telegram', 'string'],

            ['instagram', 'required'],
            ['instagram', 'string'],

            ['facebook', 'required'],
            ['facebook', 'string'],

            ['youtube', 'required'],
            ['youtube', 'string'],

            ['address', 'required'],
            ['address', 'string']


        ];
    }

}