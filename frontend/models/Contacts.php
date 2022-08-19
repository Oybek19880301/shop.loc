<?php

namespace frontend\models;

use common\models\Contact;

class Contacts extends Contact
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string', 'min'=>15],

            [['status'], 'integer'],

            [[ 'create_at'], 'default', 'value'=>time()],
            [[ 'create_at'], 'integer'],

            [['name'], 'required'],
            [['name'], 'string', 'max' => 55],

            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 13],

            [['email'], 'email'],
            [['email'], 'required'],
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
            'phone' => 'Phone',
            'email' => 'Email',
            'message' => 'Message',
            'status' => 'Status',
            'create_at' => 'Create_at',
        ];
    }

}