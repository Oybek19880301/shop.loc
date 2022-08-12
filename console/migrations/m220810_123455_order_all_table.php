<?php

use yii\db\Migration;

/**
 * Class m220810_123455_order_all_table
 */
class m220810_123455_order_all_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('order', [
            'id'             => $this->primaryKey(),
            'fullName'       => $this->string(255)->null(),
            'phone'          => $this->string(13)->null(),
            'productions_id' => $this->integer()->null(),
            'count'          => $this->integer()->null(),
            'status'         => $this->integer()->defaultValue(0),
            'create_at'      => $this->timestamp(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('order');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220810_123455_order_all_table cannot be reverted.\n";

        return false;
    }
    */
}
