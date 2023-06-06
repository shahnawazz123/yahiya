<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order_items}}`.
 */
class m200101_000004_create_order_items_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%order_items}}', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'product_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'unit_price' => $this->decimal(10, 2)->notNull(),
        ]);

        // Add foreign key constraints for order_items table
        $this->addForeignKey('fk_order_items_order', '{{%order_items}}', 'order_id', '{{%orders}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_order_items_product', '{{%order_items}}', 'product_id', '{{%products}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropForeignKey('fk_order_items_product', '{{%order_items}}');
        $this->dropForeignKey('fk_order_items_order', '{{%order_items}}');
        $this->dropTable('{{%order_items}}');
    }
}
