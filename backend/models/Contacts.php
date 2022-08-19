<?php

namespace backend\models;

use common\models\Contact;

class Contacts extends Contact
{

    public function rules()
    {
        return [
            [['message'], 'required'],
            [['message'], 'string'],
            [['status'], 'required'],
            [['status', 'create_at'], 'integer'],
            [['name'], 'string', 'max' => 55],
            [['phone'], 'required'],
            [['phone'], 'string', 'max' => 13],
            [['email'], 'email'],
            [['email'], 'string', 'max' => 255],
        ];
    }
}