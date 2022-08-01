<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%productions}}".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category_id
 * @property int|null $status
 * @property string|null $default_img
 * @property int|null $count
 * @property int|null $price
 * @property int|null $degree
 * @property int|null $create_at
 * @property int|null $update_at
 *
 * @property Category $category
 * @property Images[] $images
 */
class Productions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%productions}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'status', 'count', 'price', 'degree', 'create_at', 'update_at'], 'integer'],
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
            'name' => 'Name',
            'category_id' => 'Category ID',
            'status' => 'Status',
            'default_img' => 'Default Img',
            'count' => 'Count',
            'price' => 'Price',
            'degree' => 'Degree',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Images]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['productions_id' => 'id']);
    }
}
