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

}