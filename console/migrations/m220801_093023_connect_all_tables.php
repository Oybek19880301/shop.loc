<?php

use yii\db\Migration;

/**
 * Class m220801_093023_connect_all_tables
 */
class m220801_093023_connect_all_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addForeignKey(
            'fk_productions_id_images',
            'images',
            'productions_id',
            'productions',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'fk_category_id_productions',
            'productions',
            'category_id',
            'category',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk_productions_id_images',
            'images'
        );

        $this->dropForeignKey(
            'fk_category_id_productions',
            'productions'
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220801_093023_connect_all_tables cannot be reverted.\n";

        return false;
    }
    */
}
