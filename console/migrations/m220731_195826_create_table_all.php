<?php

use yii\db\Migration;

/**
 * Class m220731_195826_create_table_all
 */
class m220731_195826_create_table_all extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('category',[
            'id'         => $this->primaryKey(),
            'name'       => $this->string(55)->null(),
            'create_at'  => $this->integer()->null(),
            'update_at'  => $this->integer()->null(),
        ]);

        $this->createTable('productions',[
            'id'          => $this->primaryKey(),
            'name'        => $this->string(55)->null(),
            'category_id' => $this->integer()->null(),
            'status' => $this->integer()->defaultValue(1),
            'default_img' => $this->string(255),
            'count'       => $this->integer()->null(),
            'price'       => $this->integer()->null(),
            'degree'      => $this->integer()->null(),
            'create_at'   => $this->integer()->null(),
            'update_at'   => $this->integer()->null(),
        ]);

        $this->createTable('images',[
            'id'         => $this->primaryKey(),
            'name'       => $this->string(55)->null(),
            'productions_id' => $this->integer()->null(),
            'create_at'  => $this->integer()->null(),
            'update_at'  => $this->integer()->null(),
        ]);

        $this->createTable('contact',[
            'id'         => $this->primaryKey(),
            'name'       => $this->string(55)->null(),
            'phone'      => $this->string(13)->null(),
            'email'      => $this->string(255)->null(),
            'message'    => $this->text()->null(),
            'status'     => $this->integer()->defaultValue(0),
            'create_at'  => $this->integer()->null(),
            'update_at'  => $this->integer()->null(),
        ]);

        $this->createTable('config',[
            'id'         => $this->primaryKey(),
            'phone'      => $this->string(13)->null(),
            'email'      => $this->string(255)->null(),
            'telegram'   => $this->string()->null(),
            'instagram'  => $this->string()->null(),
            'facebook'   => $this->string()->null(),
            'youtube'    => $this->string()->null(),
            'address'    => $this->string()->null(),
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('category');
        $this->dropTable('productions');
        $this->dropTable('images');
        $this->dropTable('contact');
        $this->dropTable('config');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220731_195826_create_table_all cannot be reverted.\n";

        return false;
    }
    */
}
