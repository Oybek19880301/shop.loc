<?php

namespace backend\models;

use common\models\Config;

class Configs extends Config
{

    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 13],
            [['email', 'telegram', 'instagram', 'youtube', 'address'], 'required'],
            [['email', 'telegram', 'instagram', 'youtube', 'address'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Telfon raqam',
            'email' => 'Email',
            'telegram' => 'Telegram',
            'instagram' => 'Instagram',
            'youtube' => 'Youtube',
            'address' => 'Address',
        ];
    }

}