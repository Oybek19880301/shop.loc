<?php

namespace frontend\models;

use common\models\Category;
use common\models\Productions;

class Production extends Productions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'status', 'count', 'price', 'degree', 'create_at', 'update_at'], 'integer'],
            [['description'], 'required'],
            [['description'], 'string'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 55],
            [['default_img'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Mahsulot nomi',
            'category_id' => 'Kategoriyasi',
            'status' => 'Holati',
            'default_img' => 'Rasmi',
            'count' => 'Soni',
            'price' => 'Narxi',
            'degree' => 'Bannerga chiqishi',
            'description' => 'Mahsulot haqida',
            'create_at' => 'Yaratilgan vaqti',
            'update_at' => 'Yangilangan vaqti',
        ];
    }



}