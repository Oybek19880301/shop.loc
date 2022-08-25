<?php

namespace restapi\models;

use yii\db\ActiveRecord;

class Order extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%order}}';
    }

    public function rules()
    {
        return [

            ['fullName', 'required'],
            ['fullName', 'string'],

            ['phone', 'required'],
            ['phone', 'integer'],

            ['productions_id', 'required'],
            ['productions_id', 'integer'],

            ['count', 'required'],
            ['count', 'integer'],

            ['create_at', 'default', 'value'=>time()],

            ['status', 'required'],
            ['status', 'integer'],


        ];
    }

    public function fields()
    {
        return [
            'id',
            'name',
        ];
    }

}