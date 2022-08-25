<?php

namespace restapi\models;

use yii\db\ActiveRecord;

class Image extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%images}}';
    }
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],

            [['productions_id'], 'required'],
            [['productions_id'], 'integer'],

            ['create_at', 'default', 'value'=>time()],
        ];
    }

}