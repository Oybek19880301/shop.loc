<?php

namespace common\models;

class OrderStatus extends \yii\base\Model
{
    const STATUS_NEW    = 0; // Kelgan buyurtma
    const STATUS_HOLD   = 1; // Jarayondagi buyurtma
    const STATUS_FINISH = 2; // Yitkazilgan buyurtma

}