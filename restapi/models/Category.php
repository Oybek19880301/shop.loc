<?php

namespace restapi\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%category}}';
    }

    public function rules()
    {
        return [

            ['name','required'],
            ['name', 'string', 'max'=>30],

            ['create_at','default', 'value'=>time()],

        ];
    }

}