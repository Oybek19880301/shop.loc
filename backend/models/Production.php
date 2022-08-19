<?php

namespace backend\models;

use common\models\Category;
use common\models\Productions;
use yii\web\UploadedFile;

class Production extends Productions
{

    public function rules()
    {
        return [
            [['category_id', 'status', 'count', 'price', 'degree'], 'required'],
            [['category_id', 'status', 'count', 'price', 'degree', 'create_at', 'update_at'], 'integer'],
            [['description'], 'required'],
            [['description'], 'string'],
            [['name'], 'required'],
            [['name'], 'string', 'max' => 55],
            [['default_img'], 'required'],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['default_img'], 'file', 'extensions'=>'jpeg,jpg,png', 'maxSize' => 1024*1024*2],
        ];
    }

    public function mySave()
    {

        $img1 = UploadedFile::getInstance($this, 'default_img');

        if($img1){
            $file1 = $img1->baseName . '.' . $img1->extension;
            $img1->saveAs(\Yii::getAlias('@frontend/web/upload/').$file1);
            $this->default_img = $file1;
        }

        return $this->save()?true:false;
    }
}