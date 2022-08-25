<?php

namespace restapi\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public static function tableName()
    {
        return '{{%productions}}';
    }

    public function rules()
    {
        return [

            ['name','required'],
            ['name', 'string', 'max'=>30],

            ['category_id','required'],
            ['category_id', 'integer'],

            ['status','required'],
            ['status', 'integer'],

            ['default_img','required'],
            ['default_img', 'string'],

            ['count','required'],
            ['count', 'integer'],

            ['price','required'],
            ['price', 'integer'],

            ['degree','required'],
            ['degree', 'integer'],

            ['description','required'],
            ['description',    'string'],

            ['create_at','default', 'value'=>time()],




        ];
    }

    public function fields()
    {
        return [
            'id',
            'name',
            'category_id'=> function($model){
                return Category::findOne(['id'=>$model->category_id])->name;
            } ,
            'create_at'=>function($model){
                 return date('Y-m-d H:i', $model->create_at);
            },
        ];
    }
}