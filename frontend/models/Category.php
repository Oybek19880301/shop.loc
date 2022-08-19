<?php

namespace frontend\models;

class Category extends \common\models\Category
{
    public function rules()
    {
        return [
            [['create_at', 'update_at'], 'integer'],
            [['name'], 'string', 'max' => 55],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'create_at' => 'Kiritilgan vaqti',
            'update_at' => 'Yangilangilgan vaqti',
        ];
    }

}