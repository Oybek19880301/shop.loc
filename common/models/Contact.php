<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%contact}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $message
 * @property int|null $status
 * @property int|null $create_at
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%contact}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['status', 'create_at'], 'integer'],
            [['name'], 'string', 'max' => 55],
            [['phone'], 'string', 'max' => 13],
            [['email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Nomi',
            'phone' => 'Telefon',
            'email' => 'Email',
            'message' => 'Xabar mazmuni',
            'status' => 'Holati',
            'create_at' => 'Yaratilgan vaqti',
        ];
    }
}
