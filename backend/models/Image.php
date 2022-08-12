<?php

namespace backend\models;

use common\models\Images;
use common\models\Productions;
use yii\web\UploadedFile;

class Image extends Images
{
    public function rules()
    {
        return [
            [['productions_id', 'create_at', 'update_at'], 'integer'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 55],
            [['productions_id'], 'exist', 'skipOnError' => true, 'targetClass' => Productions::className(), 'targetAttribute' => ['productions_id' => 'id']],
            [['name'], 'file', 'extensions'=>'jpeg,jpg,png', 'maxSize' => 1024*1024*2],
        ];
    }

    public function mySave()
    {

        $img1 = UploadedFile::getInstance($this, 'name');

        if($img1){
            $file1 = $img1->baseName . '.' . $img1->extension;
            $img1->saveAs(\Yii::getAlias('@frontend/web/upload/').$file1);
            $this->name = $file1;
        }

        return $this->save()?true:false;
    }

}