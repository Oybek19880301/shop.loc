<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%images}}".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $productions_id
 * @property int|null $create_at
 * @property int|null $update_at
 *
 * @property Productions $productions
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%images}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productions_id', 'create_at', 'update_at'], 'integer'],
            [['name'], 'string', 'max' => 55],
            [['productions_id'], 'exist', 'skipOnError' => true, 'targetClass' => Productions::className(), 'targetAttribute' => ['productions_id' => 'id']],
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
            'productions_id' => 'Productions ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    /**
     * Gets query for [[Productions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductions()
    {
        return $this->hasOne(Productions::className(), ['id' => 'productions_id']);
    }
}
