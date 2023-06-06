<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m200101_000004_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'order_date' => $this->dateTime(),
            'total_amount' => $this->decimal(10, 2)->notNull(),
            'status' => $this->string()->notNull(),
        ]);
        // Add foreign key constraint for orders table
        $this->addForeignKey('fk_orders_user', '{{%orders}}', 'user_id', '{{%users}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropForeignKey('fk_orders_user', '{{%orders}}');
        $this->dropTable('{{%orders}}');
    }
}
