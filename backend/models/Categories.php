<?php

namespace backend\models;

use common\models\Category;

class Categories extends Category
{

    public function rules()
    {
        return [
            [['create_at', 'update_at'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 55],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nomi',
            'create_at' => 'Yaratilgan vaqti',
            'update_at' => 'Yangilangan vaqti',
        ];
    }

}