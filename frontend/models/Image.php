<?php

namespace frontend\models;

use common\models\Images;
use common\models\Productions;

class Image extends Images
{

    public function rules()
    {
        return [
            [['productions_id', 'create_at', 'update_at'], 'integer'],
            [['name'], 'string', 'max' => 55],
            [['productions_id'], 'exist', 'skipOnError' => true, 'targetClass' => Productions::className(), 'targetAttribute' => ['productions_id' => 'id']],
        ];
    }


    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'productions_id' => 'Productions ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

}