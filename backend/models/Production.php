<?php

namespace backend\models;

use common\models\Category;
use common\models\Productions;

class Production extends Productions
{

    public function rules()
    {
        return [
            [['category_id', 'status', 'count', 'price', 'degree'], 'required'],
            [['category_id', 'status', 'count', 'price', 'degree', 'create_at', 'update_at'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 55],
            [['default_img'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Mahsulot nomi',
            'category_id' => 'Kategoriyasi',
            'status' => 'Holati',
            'default_img' => 'Default Img',
            'count' => 'Mahsulot soni',
            'price' => 'Mahsulot narxi',
            'degree' => 'Darajasi',
            'create_at' => 'Yaratilgan vaqti',
            'update_at' => 'Yangilangan vaqti',
        ];
    }
}