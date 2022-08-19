<?php

namespace frontend\models;

class Config extends \common\models\Config
{

    public function rules()
    {
        return [
            [['phone'], 'string', 'max' => 13],
            [['email', 'telegram', 'instagram', 'youtube', 'facebook', 'address'], 'string', 'max' => 255],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id'        => 'ID',
            'phone'     => 'Phone',
            'email'     => 'Email',
            'telegram'  => 'Telegram',
            'instagram' => 'Instagram',
            'facebook'  => 'Facebook',
            'youtube'   => 'Youtube',
            'address'   => 'Address',
        ];
    }

}