<?php

namespace backend\models;

class Orders extends \common\models\Order
{
    public function rules()
    {
        return [
            [['productions_id', 'count', 'status'], 'required'],
            [['productions_id', 'count', 'status'], 'integer'],
            [['create_at'], 'safe'],
            [['fullName'], 'required'],
            [['fullName'], 'string', 'max' => 255],
            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 13],
        ];
    }

}