<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%order}}".
 *
 * @property int $id
 * @property string|null $fullName
 * @property string|null $phone
 * @property int|null $productions_id
 * @property int|null $count
 * @property int|null $status
 * @property string|null $create_at
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%order}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productions_id', 'count', 'status'], 'integer'],
            [['create_at'], 'safe'],
            [['fullName'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Ism Familiya',
            'phone' => 'Telefon',
            'productions_id' => 'Mahsulot',
            'count' => 'Soni',
            'status' => 'Holati',
            'create_at' => 'Yaratilgan vaqti',
        ];
    }
}
