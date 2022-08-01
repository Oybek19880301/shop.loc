<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%category}}".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $create_at
 * @property int|null $update_at
 *
 * @property Productions[] $productions
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at'], 'integer'],
            [['name'], 'string', 'max' => 55],
        ];
    }

    /**
     * {@inheritdoc}
     */ public function attributeLabels()
{
    return [
        'id' => 'ID',
        'name' => 'Nomi',
        'create_at' => 'Kiritilgan vaqti',
        'update_at' => 'Yangilangilgan vaqti',
    ];
}


    /**
     * Gets query for [[Productions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductions()
    {
        return $this->hasMany(Productions::className(), ['category_id' => 'id']);
    }
}
