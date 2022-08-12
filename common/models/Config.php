<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%config}}".
 *
 * @property int $id
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $telegram
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $address
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%config}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'string', 'max' => 13],
            [['email', 'telegram', 'instagram', 'youtube', 'facebook', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
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
