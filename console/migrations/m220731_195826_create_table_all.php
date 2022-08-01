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
            'id'         => $this->primaryKey(),
            'name'       => $this->string(55)->null(),
            'category_id' => $this->integer()->null(),
            'status' => $this->integer()->defaultValue(1),
            'default_img' => $this->string(255),
            'count'       => $this->integer()->null(),
            'price'       => $this->integer(30),
            'asterisks'   => $this->integer(15)->null(),
            'create_at'  => $this->integer()->null(),
            'update_at'  => $this->integer()->null(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('category');
        $this->dropTable('productions');
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
